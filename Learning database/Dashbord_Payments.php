<?php
  require_once 'arrayPayment.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashbord Payments</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php
              require_once 'SideBar.php'
            ?>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                    require_once 'NavBar.php'
                ?>
                
                <!-- Page content-->
                <div class="bg-light navbar-light ">
                  <nav class="navbar navbar-expand-lg pt-3">
                    <div class="container-fluid">
                        <h1 class="fs-3 ps-3">Payments Details</h1>
                        <i class="bi bi-arrows-expand pe-3 text-info fs-4"></i>
                    </div>
                </nav>

                <div class="container-fluid table-responsive">

                  <table class="table table-borderless">
                    <thead >
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($tabpayment as $payment) : ?>
                      <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                        <td><?php echo $payment['name'] ?></td>
                        <td><?php echo $payment['PaymentSchedule'] ?></td>
                        <td><?php echo $payment['BillNumber'] ?></td>
                        <td><?php echo $payment['AmountPaid'] ?></td>
                        <td><?php echo $payment['BalanceAmount'] ?></td>
                        <td><?php echo $payment['Date'] ?></td>
                        <td class="text-info">
                          <?php echo $payment['icone'] ?>
                        </td>
                      </tr>
                      
                      <?php endforeach ?>
                      
                    </tbody>
                  </table>
              </div>


            </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
