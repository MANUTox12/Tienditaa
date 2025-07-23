<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de Black-Scholes </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/5902e5da71.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Ingles.php">
                        <i class="fa-solid fa-language"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://uatx.mx/" class="brand-link" target="_blank">
                <img src="dist/img/uat.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Proyecto Integrador</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/mis.png" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="https://economipedia.com/definiciones/modelo-black-scholes.html" class="d-block" target="_blank">Modelo Black-Scholes</a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Mas informacion
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!--<li class="nav-item">
                  <a href="./index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>-->
                                <li class="nav-item">
                                    <a href="#" target="_blank" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <i class="fa-solid fa-file-word"></i>
                                        <p>Documento Oficial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.canva.com/design/DAFUCiA17QU/4KykkEhKfHyqxDuoUb02Pg/view?utm_content=DAFUCiA17QU&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" target="_blank" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <i class="fa-solid fa-file-powerpoint"></i>
                                        <p>Acerca del modelo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://drive.google.com/file/d/1jQ1mHeQFotUkTDVfwdOuZxljc6LN9KaQ/view?usp=sharing" target="_blank" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <i class="fa-solid fa-question"></i>
                                        <p>Manual de uso</p>
                                    </a>
                                </li>

                                <!--
                <li class="nav-item">
                  <a href="./index4.php" class="nav-link">
                    <i class="fa-solid fa-user-pen"></i>
                    <p>Editar usuarios</p>
                  </a>
                  </li>
                <li class="nav-item">
                  <a href="./index5.php" class="nav-link">
                    <i class="fa-solid fa-trash"></i>
                    <p>Eliminar usuarios</p>
                  </a>
                </li>-->
                                <li class="nav-item">
                                    <a href="https://drive.google.com/file/d/15M3qYv-WKLsgRNUI36cu3dd7geJRrBLL/view" target="_blank" class="nav-link">
                                        <i class="fa-solid fa-book"></i>
                                        <p>Especulacion financiera</p>
                                    </a>
                                </li>




                                <li class="nav-item">
                                    <a href="https://drive.google.com/file/d/1dcu2TcIu79OPJu_zEXKj3aGdzUtjerYb/view" target="_blank" class="nav-link">
                                        <i class="fa-solid fa-scale-balanced"></i>
                                        <p>Codigo etico</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="https://www.youtube.com/watch?v=dGYc5ul4IQw&t=501s&ab_channel=TusClasesdeFinanzas" target="_blank" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <i class="fa-solid fa-square-root-variable"></i>
                                        <p>Tutorial sobre el calculo</p>
                                    </a>
                                </li>



                                <li class="nav-item">
                                    <a href="https://goodcalculators.com/black-scholes-calculator/" target="_blank" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <i class="fa-solid fa-check"></i>
                                        <p>Compara los resultados!</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Calculadora de Black-Scholes </li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Calculadora de Black-Scholes</h3>
                                </div>
                                <form method="post">
                                    <div class="card-body">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Precio actual de la accion</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                                                </div>
                                                <input class="form-control" type="number" name="SP" min="1" placeholder="Precio actual de la accion" step="any" required>
                                            </div>
                                            <!-- /.input group -->

                                        </div>
                                        <div class="form-group">
                                            <label>Precio marcado de opción</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                                                </div>
                                                <input class="form-control" type="number" type="number" name="ST" min="1" placeholder="Precio marcado de opción" step="any" required>
                                            </div>
                                            <!-- /.input group -->

                                        </div>

                                        <div class="form-group">
                                            <label>Volatibilidad</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-cloud"></i></span>
                                                </div>
                                                <input class="form-control" type="number" name="V" min="1" placeholder="Volatibilidad" min="0" max="100" step="any" required>
                                            </div>
                                            <!-- /.input group -->

                                        </div>

                                        <div class="form-group">
                                            <label>Rendimiento del activo libre de riesgo</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-triangle-exclamation"></i></span>
                                                </div>
                                                <input class="form-control" type="number" name="R" min="1" placeholder="Rendimiento de un activo libre de riesgo" max=100 step="any" required>
                                            </div>
                                            <!-- /.input group -->

                                        </div>

                                        <div class="form-group">
                                            <label>Tiempo antes del vencimiento</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-stopwatch"></i></span>
                                                </div>
                                                <input class="form-control" type="number" name="T" min="1" placeholder="Tiempo antes del vencimiento" step="any" required>
                                            </div>
                                            <!-- /.input group -->

                                        </div>

                                        <div class="form-group">
                                            <select class="form-control select2 select2-primary" data-dropdown-css-class="select2-primary" style="width: 100%;" name="Boom">
                                                <option selected="selected" value="months">Meses</option>
                                                <option value="years">A&ntilde;os</option>
                                                <option value="days">Dias</option>
                                            </select>

                                        </div>
                                        <!-- /.form group -->
                                        <input class="btn btn-primary col start" type="submit" value="Calcular" name="Calcular">

                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->


                            </div>
                            <!-- /.card-body -->
                        </div>
                        </form>

<?php

// Black-Scholes option pricing
function stdNormalCDF($x) {
    // Abramowitz and Stegun approximation
    $t = 1 / (1 + 0.2316419 * abs($x));
    $d = 0.3989423 * exp(-$x * $x / 2);
    $p = $d * $t * (0.3193815 + $t * (-0.3565638 + $t * (1.781478 +
         $t * (-1.821256 + $t * 1.330274))));
    return $x >= 0 ? 1 - $p : $p;
}

function blackScholes($S, $K, $T, $r, $sigma) {
    if ($T <= 0 || $sigma <= 0) {
        return ['call' => max(0, $S - $K), 'put' => max(0, $K - $S)];
    }
    $d1 = (log($S / $K) + ($r + 0.5 * $sigma * $sigma) * $T) / ($sigma * sqrt($T));
    $d2 = $d1 - $sigma * sqrt($T);
    $Nd1 = stdNormalCDF($d1);
    $Nd2 = stdNormalCDF($d2);

    $discount = exp(-$r * $T);
    $call = $S * $Nd1 - $K * $discount * $Nd2;
    $put  = $call + $K * $discount - $S;

    return ['call' => $call, 'put' => $put];
}

// Default placeholders
$result   = ['call' => '', 'put' => ''];
$S_orig   = '';
$K_orig   = '';
$T_years  = '';
$volPct   = '';
$rPct     = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize inputs
    $S      = floatval($_POST['SP'] ?? 0);
    $K      = floatval($_POST['ST'] ?? 0);
    $volPct = floatval($_POST['V']  ?? 0);
    $rPct   = floatval($_POST['R']  ?? 0);
    $T      = floatval($_POST['T']  ?? 0);
    $unit   = $_POST['Boom'] ?? 'years';

    // Preserve original for display
    $S_orig  = $S;
    $K_orig  = $K;
    $T_years = $T;

    // Convert percentages to decimals
    $sigma = $volPct / 100;
    $r     = $rPct   / 100;

    // Convert time unit to years
    switch ($unit) {
        case 'months': $T /= 12; break;
        case 'days':   $T /= 360; break;
    }

    // Compute prices
    $prices = blackScholes($S, $K, $T, $r, $sigma);
    $callRaw = $prices['call'];
    $putRaw  = max(0, $prices['put']);

    // Format results
    $result['call'] = number_format($callRaw, 2, '.', ',');
    $result['put']  = number_format($putRaw,  2, '.', ',');
}
?>


                        <!-- AREA CHART -->


                        <!-- /.row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Resultados</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            <script type="text/javascript">
                                                const $grafica = document.querySelector("#areaChart");
                                                const etiquetas = <?php echo json_encode($etiquetas) ?>;
                                                const call = {
                                                    label: "Call",
                                                    data: <?php echo json_encode($Azul) ?>,
                                                    backgroundColor: '#007bff',
                                                    fill: false,
                                                    borderColor: '#007bff',
                                                    borderWidth: 5,
                                                    pointHoverBackgroundColor: "#007bff",
                                                };
                                                const put = {
                                                    label: "Put",
                                                    data: <?php echo json_encode($Verde) ?>,
                                                    backgroundColor: '#28a745',
                                                    fill: false,
                                                    borderColor: '#28a745',
                                                    borderWidth: 5,
                                                    pointHoverBackgroundColor: "#28a745",
                                                };
                                                new Chart($grafica, {
                                                    type: 'line',
                                                    data: {
                                                        labels: etiquetas,
                                                        datasets: [
                                                            call,
                                                            put,
                                                        ]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    beginAtZero: true
                                                                }
                                                            }],
                                                        },
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-body Striped Full Width Table">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Datos</th>
                                                    <th>Valores</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Call Price</td>
                                                    <td><?= $result['call'] !== '' ? '$' . htmlspecialchars($result['call']) : '' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Put Price</td>
                                                    <td><?= $result['put'] !== '' ? '$' . htmlspecialchars($result['put']) : '' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Precio actual de la acción</td>
                                                    <td><?= $S_orig !== '' ? '$' . htmlspecialchars(number_format($S_orig, 2, '.', ',')) : '' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Precio marcado de opción</td>
                                                    <td><?= $K_orig !== '' ? '$' . htmlspecialchars(number_format($K_orig, 2, '.', ',')) : '' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tiempo en <?php echo ($T_years == 1 ? 'año' : 'años'); ?></td>
                                                    <td><?= $T_years !== '' ? htmlspecialchars($T_years) : '' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Volatilidad</td>
                                                    <td><?= $volPct !== '' ? htmlspecialchars($volPct) . '%' : '' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Riesgo</td>
                                                    <td><?= $rPct !== '' ? htmlspecialchars($rPct) . '%' : '' ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>

                    <!-- /.card-body -->

                    <!-- /.card -->
                    <!-- /.card -->
                </div>
        </div>


        <!-- /.content -->
        </section>



        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Calculadora de Black <br> <a href="https://www.facebook.com/profile.php?id=100005479659982&mibextid=ZbWKwL" target="_blank">Nathan Jose Vargas Ronquillo</a><br> <a href="https://www.facebook.com/manuel.toxqui.583" target="_blank">Jose Manuel Toxqui Briones</a> <br> <a href="https://www.facebook.com/profile.php?id=100005479659982&mibextid=ZbWKwL" target="_blank">Fernando Ibañez Duran</a> <br> <a href="https://www.facebook.com/profile.php?id=100005479659982&mibextid=ZbWKwL" target="_blank">Salvador Muñoz Molina</a> </strong><br> All rights reserved. &#169
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.2
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
</body>

</html>