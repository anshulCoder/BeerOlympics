<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 * @property generalfunction_library $generalfunction_library
 * @property Home_model $home_model
 */

class Home extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
	{
		$data = array();
		$metaInfo = $this->home_model->getRecentMeta();
		$data['globalStyle'] = $this->dataformatinghtml_library->getGlobalStyleHtml($data);
		$data['globalJs'] = $this->dataformatinghtml_library->getGlobalJsHtml($data);
        $data['meta']['title'] = $metaInfo['metaTitle'];
        $data['meta']['description'] = $metaInfo['metaDescription'];
        $data['meta']['img'] = META_SITE_PATH.'asset/images/thumb/'.$metaInfo['metaImg'];
		//$data['headerView'] = $this->dataformatinghtml_library->getHeaderHtml($data);

		$this->load->view('HomeView', $data);
	}

    public function mrpData()
    {
        $data = array();
        $data['globalStyle'] = $this->dataformatinghtml_library->getGlobalStyleHtml($data);
        $data['globalJs'] = $this->dataformatinghtml_library->getGlobalJsHtml($data);
        $data['headerView'] = $this->dataformatinghtml_library->getHeaderHtml($data);

        $this->load->view('MrpDataView', $data);
    }

    public function getPaymentLink()
    {
        $post = $this->input->post();
        $data = array();

        $isCouponSet = false;
        $finalAmt = INITIAL_TEAM_AMOUNT;
        // Checking for coupon code
        if(isset($post['couponCode']) && isStringSet($post['couponCode']))
        {
            $coupon = $post['couponCode'];

            $couponStatus = $this->home_model->checkCouponCode($coupon);
            if(myIsArray($couponStatus))
            {
                if($couponStatus['isRedeemed'] == '1')
                {
                    $data['status'] = false;
                    $data['errorMsg'] = 'Coupon Already Redeemed!';
                    echo json_encode($data);
                    return false;
                }
                elseif(strtotime($couponStatus['couponExpiry']) < strtotime(date('Y-m-d')))
                {
                    $data['status'] = false;
                    $data['errorMsg'] = 'Coupon Has Expired!';
                    echo json_encode($data);
                    return false;
                }
                else
                {
                    $redeemedData = array(
                        'isRedeemed' => '1',
                        'useDateTime' => date('Y-m-d H:i:s')
                    );
                    $couponId = $couponStatus['id'];
                    $this->home_model->markCouponAsUsed($redeemedData,$couponId);
                    $finalAmt = $this->computeCoupon($couponStatus['couponType'],$couponStatus['couponDetails'],$finalAmt);
                    //$finalAmt = FINAL_COUPON_AMOUNT;
                    $isCouponSet = true;
                }
            }
            else
            {
                $data['status'] = false;
                $data['errorMsg'] = 'Invalid Coupon!';
                echo json_encode($data);
                return false;
            }
        }
        if(isset($post['ifNonIndian']))
        {
            $post['capMob'] = '9820570311';
        }
        //Saving Captain Data
        $capData = array(
            'teamName' => $post['teamName'],
            'capName' => $post['capName'],
            'capAge' => $post['capAge'],
            'capEmail' => $post['capEmail'],
            'capMob' => $post['capMob'],
            'capCity' => $post['capCity'],
            'capZip' => $post['capZip'],
            'capTshirt' => $post['capTshirt'],
            'capMeal' => $post['capMeal'],
            'insertedDateTime' => date('Y-m-d H:i:s')
        );
        if(isset($couponId))
        {
            $capData['couponId'] = $couponId;
        }
        if(isset($post['ifBusRequiredCap']) && isStringSet($post['ifBusRequiredCap']))
        {
            $capData['ifBusRequired'] = $post['ifBusRequiredCap'];
            $finalAmt += WAGON_PRICE;
        }

        $captainId = $this->home_model->saveCaptainRecord($capData);

        //Saving Athlete's data
        for($i=1;$i<4;$i++)
        {
            $athleteData = array(
                'capId' => $captainId,
                'athleteName' => $post['athName'.$i],
                'athleteAge' => $post['athAge'.$i],
                'athleteTshirt' => $post['athTshirt'.$i],
                'athleteMeal' => $post['athMeal'.$i]
            );
            if(isset($post['ifBusRequired'.$i]) && isStringSet($post['ifBusRequired'.$i]))
            {
                $athleteData['ifBusRequired'] = $post['ifBusRequired'.$i];
                $finalAmt += WAGON_PRICE;
            }

            $this->home_model->saveAthleteRecord($athleteData);
        }

        //Saving Payment Info
        $payData = array(
            'capId' => $captainId,
            'busId' => null,
            'tripAmount' => $finalAmt,
            'bookingStatus' => '0',
            'paymentDateTime' => date('Y-m-d H:i:s')
        );

        $payId = $this->home_model->savePaymentRecord($payData);

        // Getting the payment link
        $purpose = 'New Beer Olympics Booking';
        $instaData = $this->getInstaLink($post['capName'],$post['capEmail'],$post['capMob'],$finalAmt,$payId,$purpose);

        if($instaData['status'] === false)
        {
            $data['status'] = false;
            $data['errorMsg'] = $instaData['errorMsg'];
        }
        else
        {
            $data['status'] = true;
            $data['payUrl'] = $instaData['payUrl'];
        }
        echo json_encode($data);
    }

    public function getBusPayLink()
    {
        $post = $this->input->post();
        $data = array();

        $finalAmt = WAGON_PRICE;
        if(isset($post['busBookerName']) && isStringSet($post['busBookerName']) &&
            isset($post['busBookerEmail']) && isStringSet($post['busBookerEmail']) &&
            isset($post['busBookerMobile']) && isStringSet($post['busBookerMobile']) &&
            isset($post['busBookerSeats']) && isStringSet($post['busBookerSeats']))
        {
            $busData = array(
                'busName' => $post['busBookerName'],
                'busEmail' => $post['busBookerEmail'],
                'busPhone' => $post['busBookerMobile'],
                'busSeats' => $post['busBookerSeats'],
                'insertedDateTime' => date('Y-m-d H:i:s')
            );

            $busId = $this->home_model->saveBusRecord($busData);
            $finalAmt = $finalAmt * $post['busBookerSeats'];

            //Saving Payment Info
            $payData = array(
                'capId' => null,
                'busId' => $busId,
                'tripAmount' => $finalAmt,
                'bookingStatus' => '0',
                'paymentDateTime' => date('Y-m-d H:i:s')
            );

            $payId = $this->home_model->savePaymentRecord($payData);

            // Getting the payment link
            $purpose = 'Beer Olympics Wagon Booking';
            $instaData = $this->getInstaLink($post['busBookerName'],$post['busBookerEmail'],$post['busBookerMobile'],$finalAmt,$payId,$purpose);

            if($instaData['status'] === false)
            {
                $data['status'] = false;
                $data['errorMsg'] = $instaData['errorMsg'];
            }
            else
            {
                $data['status'] = true;
                $data['payUrl'] = $instaData['payUrl'];
            }
        }
        else
        {
            $data['status'] = false;
            $data['errorMsg'] = 'Incomplete Request Received!';
        }
        echo json_encode($data);
    }
    function getInstaLink($name,$email,$mobNum,$finalAmt,$payId,$purpose)
    {
        $data = array();
        $instaDetails = array(
            'amount' => $finalAmt,
            'purpose' => $purpose,
            'buyer_name' => $name,
            'email' => $email,
            'phone' => $mobNum,
            'send_email' => true,
            'send_sms' => true,
            'allow_repeated_payments' => false,
            'redirect_url' => base_url().'thank_you',
        );
        $linkGot = $this->curl_library->createInstaPayLink($instaDetails);

        if(myIsArray($linkGot) && $linkGot['success'] === true)
        {
            if(isset($linkGot['payment_request']['id']))
            {
                $payReqId = $linkGot['payment_request']['id'];
                $payReqUrl = $linkGot['payment_request']['longurl'].'?embed=form';

                $details = array(
                    'paymentId' => $payReqId,
                    'paymentUrl' => $payReqUrl
                );

                $this->home_model->updatePayDetails($details,$payId);

                $data['status'] = true;
                $data['payUrl'] = $payReqUrl;
            }
            else
            {
                $data['status'] = false;
                $data['errorMsg'] = "Error Connecting To Payment Server";
            }
        }
        else
        {
            $errorDetails = array(
                'refUrl' => 'beerolmpics.in',
                'errorTxt' => json_encode($linkGot)
            );
            $this->home_model->saveErrorLog($errorDetails);
            $data['status'] = false;
            if(isset($linkGot['message']['phone']))
            {
                $data['errorMsg'] = $linkGot['message']['phone'][0];
            }
            else
            {
                $data['errorMsg'] = "Error Connecting To Payment Server";
            }
        }

        return $data;
    }

    public function verifyCoupon()
    {
        $post = $this->input->post();
        $data = array();

        if(isset($post['couponCode']) && isStringSet($post['couponCode']))
        {
            $coupon = $post['couponCode'];
            $couponStatus = $this->home_model->checkCouponCode($coupon);
            if(myIsArray($couponStatus))
            {
                if($couponStatus['isRedeemed'] == '1')
                {
                    $data['status'] = false;
                    $data['errorMsg'] = 'Coupon Already Redeemed!';
                    echo json_encode($data);
                    return false;
                }
                elseif(strtotime($couponStatus['couponExpiry']) < strtotime(date('Y-m-d')))
                {
                    $data['status'] = false;
                    $data['errorMsg'] = 'Coupon Has Expired!';
                    echo json_encode($data);
                    return false;
                }
                else
                {
                    $data['status'] = true;
                    $data['couponType'] = $couponStatus['couponType'];
                    $data['couponCost'] = $couponStatus['couponDetails'];
                }
            }
            else
            {
                $data['status'] = false;
                $data['errorMsg'] = 'Invalid Coupon!';
                echo json_encode($data);
                return false;
            }
        }
        else
        {
            $data['status'] = false;
            $data['errorMsg'] = 'Coupon Not Provided!';
        }
        $data['status'] = true;
        echo json_encode($data);
        //echo '<pre>';
        //var_dump($post);
    }

    public function thankYou()
    {
        $data = array();
        $get = $this->input->get();
        if(isset($get['payment_request_id']))
        {
            $instaRecord = $this->home_model->getPayRecordByReqId($get['payment_request_id']);
            if(isset($instaRecord) && myIsArray($instaRecord))
            {
                if($instaRecord['bookingStatus'] == '1' )
                {
                    $data['payStatus'] = false;
                    $data['payError'] = 'You have already claimed the ticket on '.$instaRecord['capEmail'];
                }
                else
                {
                      $mailData = array();
                    $userEmail = '';
                    //$get['payment_id']
                    $instaPayRecord = $this->curl_library->getInstaMojoRecord($get['payment_id']);
                    if(myIsArray($instaPayRecord) && $instaPayRecord['success'] === true)
                    {
                        if(isset($instaRecord['capId']) && isStringSet($instaRecord['capId']))
                        {
                            $teamData = $this->home_model->getAllTeam($instaRecord['capId']);
                            //Fetch all team details And send mail
                            $busCount = 0;
                            $isCapBus = true;

                            foreach($teamData as $key => $row)
                            {
                                $mailData['teamName'] = $row['teamName'];
                                $mailData['capName'] = $row['capName'];
                                $mailData['capEmail'] = $row['capEmail'];
                                $mailData['capMeal'] = $row['capMeal'];
                                $mailData['athleteNames'][] = $row['athleteName'];
                                if($row['ifBusRequiredCap'] == '1' && $isCapBus)
                                {
                                    $isCapBus = false;
                                    $busCount++;
                                }
                                if($row['ifBusRequiredAthlete'] == '1')
                                {
                                    $busCount++;
                                }
                            }
                            $mailData['busCount'] = $busCount;
                            $this->sendemail_library->teamBeerSendMail($mailData);
                            if($busCount > 0)
                            {
                                $busMail = array(
                                    'busName' => $mailData['teamName'],
                                    'busSeats' => $busCount,
                                    'busEmail' => $mailData['capEmail']
                                );
                                $this->sendemail_library->teamBusSendMail($busMail);
                            }
                            $this->sendemail_library->teamBeerDetailsSendMail($teamData,$busCount);
                            $userEmail = $instaRecord['capEmail'];
                        }
                        else
                        {
                            $teamData = $this->home_model->getAllBusTeam($instaRecord['busId']);
                            $this->sendemail_library->teamBusSendMail($teamData);
                            $this->sendemail_library->teamBusDetailsSendMail($teamData);
                            $userEmail = $instaRecord['busEmail'];
                        }

                        $details = array(
                            'tripMojoId' => $get['payment_id'],
                            'bookingStatus' => '1'
                        );
                        $this->home_model->updatePayDetails($details,$instaRecord['id']);

                        $data['payStatus'] = true;
                        $data['paySuccess'] = 'A confirmation email has been sent to you on '.$userEmail;
                    }
                    else
                    {
                        $data['payStatus'] = false;
                        $data['payError'] = 'Invalid Payment Id';
                    }
                }
            }
            else
            {
                $data['payStatus'] = false;
                $data['payError'] = 'Payment Record Not Found!';
            }
        }
        else
        {
            $data['payStatus'] = false;
            $data['payError'] = 'Error in Payment Request!';
        }

        $data['globalStyle'] = $this->dataformatinghtml_library->getGlobalStyleHtml($data);
        $data['globalJs'] = $this->dataformatinghtml_library->getGlobalJsHtml($data);
        //$data['headerView'] = $this->dataformatinghtml_library->getHeaderHtml($data);

        $this->load->view('HomeView', $data);
    }

    public function saveErrorLog()
    {
        $post = $this->input->post();

        if(isset($post['errorTxt']))
        {
            if(isset($_SERVER['HTTP_REFERER']))
            {
                $post['refUrl'] = $_SERVER['HTTP_REFERER'];
            }
            $this->home_model->saveErrorLog($post);
        }
        return true;
    }

    function computeCoupon($type,$cost,$oldAmt)
    {
        $finalAmt = $oldAmt;
        switch(strtolower($type))
        {
            case 'percentage':
                $discount = getPercentOfNumber($oldAmt,$cost);
                $finalAmt = $oldAmt - $discount;
                break;
        }
        return $finalAmt;
    }

    public function sendOlympicsMails()
    {
        $mails = $this->home_model->getAllPendingMails();

        if(isset($mails) && myIsArray($mails))
        {
            $attachment = array();
            foreach($mails as $key => $row)
            {
                $attachment = explode(',',$row['attachments']);
                $this->sendemail_library->sendWaitingEmail($row['sendTo'],$row['ccList'],$row['sendFrom'],
                    DEFAULT_SENDER_PASS,$row['sendFromName'],$row['replyTo'],$row['mailSubject'],
                    $row['mailBody'],$attachment);
                $mailData = array(
                    'sendStatus' => 'done'
                );
                $this->home_model->updateMailDetails($mailData,$row['id']);
            }
        }
    }

    public function metaSave()
    {
        $post = $this->input->post();
        $this->home_model->saveMetaRecord($post);
        echo 'success';
    }

    public function mugBeerOlympicsCoupons()
    {
        $toBeInserted = array();
        $couponGens = array();
        $mugList = array(252,287,306,405,527,619,761,888,1221,1574,1607,1702,6162,6666,6777,7777,7990,8056,8590,9777);
        $tempCodes = $this->home_model->getAllCouponCodes();
        $couponGens = explode(',',$tempCodes['coupons']);

        foreach($mugList as $key)
        {
            $newCode = mt_rand(1000,99999);

            while(myInArray('BO'.$newCode,$couponGens))
            {
                $newCode = mt_rand(1000,99999);
            }

            $toBeInserted[] = array(
                'couponCode' => 'BO'.$newCode,
                'couponType' => 'Percentage',
                'couponDetails' => '25',
                'ownerDetails' => $key,
                'couponExpiry' => '2017-05-20',
                'isRedeemed' => 0,
                'ifActive' => 1,
                'createDateTime' => date('Y-m-d H:i:s'),
                'useDateTime' => null
            );
        }

        $this->home_model->saveOlympicsCodes($toBeInserted);
        echo 'Saved';
    }
}
