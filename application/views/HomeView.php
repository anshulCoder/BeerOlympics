<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo $globalStyle; ?>
</head>
<body>
    <main class="homePage">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1>Invoice Template</h1>
                <table class="table table-responsive table-bordered">
                    <tbody>
                        <tr>
                            <td>Buyer: </td>
                            <td>
                                <select class="form-control">
                                    <option value="">Taproom Bandra</option>
                                    <option value="">Taproom Kemps</option>
                                    <option value="">Taproom Andheri</option>
                                    <option value="">Taproom Colaba</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Invoice No: </td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Date: </td>
                            <td>
                                <input type="date" class="form-control"/>
                            </td>
                            <td></td>
                            <td>Challan No:  </td>
                            <td>
                                <input type="number" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>TP Reference: </td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                            <td></td>
                            <td>Kiva TP Reference: </td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Signatory: </td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                            <td></td>
                            <td>Single day licence no: </td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td>Licence Holder</td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td>Tp Valid Till: </td>
                            <td>
                                <input type="text" class="form-control"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-1"></div>

        </div>
    </main>
</body>
<?php echo $globalJs; ?>

</html>