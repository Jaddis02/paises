<body>
    <div class="row">
        <div class="col-3 p-3 text-white bg-dark">
            <a href="<?php echo base_url(); ?>paises/pais" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Bienvenido</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

            <?php 
            // $claseIni='';
            $clasePer='';
            $claseArg='';
            $claseCh='';
            $claseBr='';

            // if($seleccionado=='inicio'){
            //     $claseIni='active';
            // }

            if ($seleccionado =='peru') {
                $clasePer='active';
            }

            elseif ($seleccionado =='argentina') {
                $claseArg ='active';
            }

            elseif ($seleccionado =='chile') {
                $claseCh='active';
            }

            elseif ($seleccionado =='brasil') {
                $claseBr ='active';
            }

            ?>
        
                <li class="peru">
                    <a href="<?php echo base_url(); ?>paises/peru" class="nav-link <?php echo $clasePer ?> 
                     text-white" onclick="Peru()">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Perú
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>paises/argentina" class="nav-link <?php echo $claseArg ?> text-white" onclick="Argentina()">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Argentina
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>paises/chile" class="nav-link <?php echo $claseCh ?> text-white" onclick="Chile()">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Chile
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>paises/brasil" class="nav-link <?php echo $claseBr ?> text-white" onclick="Brasil()">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Brasil
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Chaska</strong>
                </a>
            </div>
        </div>