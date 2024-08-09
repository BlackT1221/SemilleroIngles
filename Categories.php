<?php
$varConexion = mysqli_connect('localhost', 'root', '', 'semilleroingles');
$array = array();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categories</title>
  <link rel="stylesheet" href="index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <style>
    .custom-modal {
      background-color: rgba(0, 49, 77, 0.2);
    }
  </style>
</head>

<body>

  <div class="container d-none" id="asd">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="Categorias.php" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg height="40" height="32" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
              <style type="text/css">
                .st0 {
                  fill: #70B22D;
                }
              </style>
              <path id="path47-5" class="st0" d="M504.2,20.5c-58.3,0.1-105.6,47.4-105.5,105.8c0.1,58.3,47.4,105.6,105.7,105.6
	c58.3,0,105.6-47.3,105.6-105.7V126C609.9,67.6,562.6,20.4,504.2,20.5z M155.6,264.6c-18.6,0.1-37.5,1.1-55.2,5.6
	c-11.7,3-23,7.8-30.3,15.4c-9.2,9.5-10.4,22.3-5.9,33.3c4,9.7,14.8,16.9,26.8,21.1c25.9,8.9,54.6,10.7,81.8,16.3
	c5,1.2,10.6,2.6,13.7,6c3.2,4.1,1.3,9.7-4,12.2c-8.8,4.5-20.1,4.5-30.4,4.4c-9.4-0.4-19.7-1.2-27.2-5.9c-5.5-3.4-6.5-9.1-5.2-14.1
	l-60.6,0c-0.2,9.2,1.6,18.9,8.4,26.8c5.6,6.8,14.8,11.5,24.6,14.4c15.7,4.6,32.7,6,49.4,6.4c22.7,0.4,45.8-0.3,67.6-5.4
	c13-3.2,25.8-8.3,34.1-16.6c14.8-14.8,11.3-38.3-8.3-49.8c-9.8-5.7-21.5-9.2-33.4-11.5c-17.5-3.6-35.3-6.3-52.9-9.2
	c-6.2-1.2-12.8-2.3-18-5.2c-5.5-2.9-5.9-9.8-0.3-12.9c7.2-4.1,16.8-4,25.4-4c9.1,0.2,19,0.7,26.5,5c4.2,2.3,5.9,6.3,5.9,10.1
	l57.6-0.1c-0.2-7.3-1.6-14.9-6.9-21.2c-6.2-7.8-17.1-12.7-28.3-15.5C192.8,265.6,174.1,264.7,155.6,264.6L155.6,264.6z M280.6,268.9
	l0,137.7l168.1,0l0-30H342.3v-26.7h94.9v-29.3h-94.9l0-21.9l102.6,0l-0.1-29.7L280.6,268.9z M557.5,269c0,0-51.9,0-77.9,0l0,137.7
	l59,0l0-92.7l80.8,92.6l81,0.1l0-137.7l-59.1,0l0.1,92L557.5,269z M805.6,269.2c0,0-63.6,91.9-95.6,137.7l61.9,0l14.9-24.8h95.7
	l13.9,24.9l68.8,0L874,269.2L805.6,269.2z M836.6,302.1l29.4,49.9l-60.7,0.1L836.6,302.1z M10.6,445.6l0.5,75l280.1-1
	c14.3,3.1,22.6,12.4,19.7,33.5L138.6,854.7l56.1,52.5l266.9-461.6L10.6,445.6z M545.2,446.2l262.4,459.6l58-52.1L691.3,552.9
	c-2.9-21.2,5.4-30.6,19.7-33.7l280.2,1l-0.1-73.7L545.2,446.2z M500.9,522.3L254.8,944.7l65.4,31.9L484.4,699
	c5.7-4.6,11.4-7.1,17.1-7.3c6-0.2,12.2,2,18.3,6.8l163.8,278.4l67.4-35.2L500.9,522.3z" />
              <g id="_x23_000000ff-2" transform="matrix(0.31570611,0,0,0.23560774,-391.49698,-10.601126)">
              </g>
            </svg>

          </a>
        </div>

        <div class="text-end">
          <button class="d-flex align-items-center" id="ola" style="border: none !important; background: none; margin-left: 31.5vw;"><svg fill="#70B22D" width="40" height="32" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0" />
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
              <g id="SVGRepo_iconCarrier">
                <defs>
                  <style>
                    .cls-1 {
                      fill: none;
                    }
                  </style>
                </defs>
                <title>collapse-categories</title>
                <rect x="14" y="25" width="14" height="2" />
                <polygon points="7.17 26 4.59 28.58 6 30 10 26 6 22 4.58 23.41 7.17 26" />
                <rect x="14" y="15" width="14" height="2" />
                <polygon points="7.17 16 4.59 18.58 6 20 10 16 6 12 4.58 13.41 7.17 16" />
                <rect x="14" y="5" width="14" height="2" />
                <polygon points="7.17 6 4.59 8.58 6 10 10 6 6 2 4.58 3.41 7.17 6" />
                <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32" />
              </g>
            </svg></button>
        </div>
      </header>
    </div>

  </div>
  <div class="wrapper">
    <!-- Sidebar  -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" id="sidebar">
      <a href="#" id="sidebarCollapse" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        </button>
        <span class="fs-4" style="color: white; font-weight: 500;">Choose</span>
        <span class="ms-2 mt-1" style="color: white;">(click here to close)</span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#Ingredients" class="nav-link link-body-emphasis toggle-active" id="a">
            <svg id="Icon-Set" width="1.1vw" height="auto" viewBox="-10 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
              <title>wine</title>
              <desc>Created with Sketch Beta.</desc>
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g sketch:type="MSLayerGroup" transform="translate(-578.000000, -411.000000)" fill="#000000">
                  <path d="M588,441 L580,441 L580,427 C580,425.896 580.896,425 582,425 L586,425 C587.104,425 588,425.896 588,427 L588,441 L588,441 Z M583,417 L585,417 L585,423 L583,423 L583,417 Z M583,413 L585,413 L585,415 L583,415 L583,413 Z M587.014,423 L587,423 L587,412 C587,411.448 586.553,411 586,411 L582,411 C581.447,411 581,411.448 581,412 L581,423 L580.987,423 C578.969,423 578,424.791 578,427 L578,443 L590,443 L590,427 C590,424.791 588.98,423 587.014,423 L587.014,423 Z" id="wine" sketch:type="MSShapeGroup"></path>
                </g>
              </g>
            </svg>
            Ingredients
          </a>
        </li>
        <li>
          <a href="#CustomerService" class="nav-link link-body-emphasis toggle-active" id="b">
            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg id="Icon-Set" fill="#000000" height="auto" width="1.1vw" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
              <g>
                <g>
                  <path d="M347.429,311.388v159.705h-0.001c0,12.515,10.145,22.661,22.661,22.661c12.516,0,22.661-10.145,22.661-22.661V311.388 H347.429z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M402.534,311.388v159.705c0,12.515,10.145,22.661,22.661,22.661c12.516,0,22.661-10.145,22.661-22.661V311.388H402.534z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M433.881,108.75h-16.977l-19.355,49.768l-19.355-49.768h-16.977c0.466,17.299-2.372,46.04-13.681,58.211v66.302h100.025 v-66.302C436.238,154.775,433.417,126.046,433.881,108.75z M397.983,211.76c-3.081,0-5.58-2.499-5.58-5.58s2.499-5.58,5.58-5.58 c3.081,0,5.58,2.499,5.58,5.58S401.065,211.76,397.983,211.76z M397.983,181.49c-3.081,0-5.58-2.499-5.58-5.58 s2.499-5.58,5.58-5.58c3.081,0,5.58,2.499,5.58,5.58C403.564,178.992,401.065,181.49,397.983,181.49z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M450.619,109.051l-0.003,0.148c-0.323,12.019,0.946,26.304,4.732,37.421l-0.182,86.643h37.768l0.192-79.663 c0-0.047,0-0.093,0-0.14C493.008,129.674,474.134,110.193,450.619,109.051z" />
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <polygon points="339.696,233.263 339.696,233.262 339.696,233.262 			" />
                    <path d="M344.48,109.045c-23.624,1.022-42.624,20.549-42.743,44.415c0,0.047,0,0.093,0,0.139l0.192,79.663h37.768l-0.18-85.98 C343.585,135.815,344.797,121.025,344.48,109.045z" />
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <path d="M397.431,18.246c-21.615,0-39.137,17.522-39.137,39.137c0,21.74,17.674,39.137,39.137,39.137 c21.46,0,39.137-17.395,39.137-39.137C436.568,35.768,419.046,18.246,397.431,18.246z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M495.259,255.585H273.563c0.853-0.689,1.449-1.689,1.577-2.853c0.621-5.61,4.337-39.22,5.158-46.646h-39.9 c0.32,2.9,3.828,34.616,5.158,46.646c0.128,1.163,0.724,2.164,1.577,2.853h-62.318c2.056-1.208,3.442-3.434,3.445-5.991 c0.011-7.729,0.091-63.675,0.104-72.22c0.012-8.615-4.869-16.08-12.014-19.806l0.051-35.734c0.004-3.493-2.824-6.329-6.317-6.335 l-7.862-0.011c-3.493-0.006-6.329,2.823-6.335,6.317l-0.051,35.734c-7.156,3.704-12.059,11.156-12.071,19.771 c-0.012,8.785-0.093,64.512-0.104,72.22c-0.003,2.594,1.415,4.855,3.517,6.055h-24.026c2.056-1.208,3.442-3.434,3.445-5.991 c0.011-7.729,0.092-63.675,0.104-72.22c0.012-8.615-4.869-16.08-12.015-19.806l0.051-35.734c0.004-3.493-2.824-6.329-6.317-6.335 l-7.862-0.011c-3.493-0.006-6.329,2.823-6.335,6.317l-0.051,35.734c-7.156,3.704-12.059,11.156-12.071,19.771 c-0.012,8.785-0.093,64.512-0.104,72.22c-0.003,2.594,1.415,4.855,3.517,6.055H61.491c2.056-1.208,3.442-3.434,3.445-5.991 c0.011-7.729,0.091-63.675,0.104-72.22c0.012-8.615-4.869-16.08-12.014-19.806l0.051-35.734c0.004-3.493-2.824-6.329-6.317-6.335 l-7.862-0.011c-3.493-0.006-6.329,2.823-6.335,6.317l-0.051,35.734c-7.156,3.704-12.059,11.156-12.071,19.771 c-0.012,8.785-0.093,64.512-0.104,72.22c-0.003,2.594,1.415,4.855,3.517,6.055h-7.113C7.496,255.585,0,263.08,0,272.326 c0,9.246,7.496,16.741,16.741,16.741h478.518c9.246,0,16.741-7.496,16.741-16.741C512,263.08,504.504,255.585,495.259,255.585z" />
                </g>
              </g>
            </svg>
            Customer Service
          </a>
        </li>
        <li>
          <a href="#Cocktails" class="nav-link link-body-emphasis toggle-active" id="c">
            <svg id="Icon-Set" fill="#000000" height="auto" width="1.1vw" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
              <g>
                <g>
                  <path d="M395.637,0.001c-56.196,0-103.21,40.041-114.021,93.091H23.274c-9.413,0-17.901,5.671-21.502,14.37 c-3.603,8.698-1.609,18.71,5.05,25.364l179.361,179.254v153.375H116.31c-12.853,0-23.273,10.418-23.273,23.273 c0,12.851,10.42,23.273,23.273,23.273h93.145H302.6c12.853,0,23.273-10.422,23.273-23.273c0-12.854-10.42-23.273-23.273-23.273 h-69.872V312.079l98.696-98.639c18.882,12.546,41.027,19.288,64.212,19.288c64.163,0,116.363-52.202,116.363-116.363 C512,52.201,459.799,0.001,395.637,0.001z M395.637,186.182c-10.603,0-20.843-2.355-30.129-6.803l46.581-46.555 c6.659-6.654,8.653-16.666,5.052-25.364c-3.603-8.696-12.091-14.369-21.504-14.369h-65.815 c9.607-27.088,35.475-46.545,65.815-46.545c38.499,0,69.818,31.32,69.818,69.818S434.134,186.182,395.637,186.182z" />
                </g>
              </g>
            </svg>
            Cocktails
          </a>
        </li>
        <li>
          <a href="#Slang" class="nav-link link-body-emphasis toggle-active" id="d">
            <svg fill="#000000" id="Icon-Set" width="1.1vw" height="auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M9,14a4,4,0,1,0-4-4A4,4,0,0,0,9,14ZM9,8a2,2,0,1,1-2,2A2,2,0,0,1,9,8ZM6,15h6a4,4,0,0,1,4,4v2a1,1,0,0,1-2,0V19a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2v2a1,1,0,0,1-2,0V19A4,4,0,0,1,6,15Zm11.462-5A5.977,5.977,0,0,1,15.7,14.253a1,1,0,0,1-1.414-1.414,4.015,4.015,0,0,0,0-5.678A1,1,0,1,1,15.7,5.747,5.977,5.977,0,0,1,17.462,10Zm-.181,7.7a1,1,0,0,1,.024-1.414,8.667,8.667,0,0,0,0-12.562A1,1,0,0,1,18.7,2.281a10.667,10.667,0,0,1,0,15.438,1,1,0,0,1-1.414-.024Z" />
            </svg>
            Slang
          </a>
        </li>
        <li>
          <a href="#Games" class="nav-link link-body-emphasis toggle-active dropend" id="e">
            <svg fill="#000000" id="Icon-Set" width="1.1vw" height="auto" viewBox="-4 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-joystick-f">
              <path d='M7.915 13H9V7.874A4.002 4.002 0 0 1 10 0a4 4 0 0 1 1 7.874V13h2a3 3 0 0 1 3 3v4H0v-4a3 3 0 0 1 3-3h.085A1.5 1.5 0 0 1 4.5 12h2a1.5 1.5 0 0 1 1.415 1z' />
            </svg>
            Games
          </a>
        </li>
      </ul>
      <hr />
      <div class="dropdown position-static">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="imgs/images.jpg" alt="" width="32" height="32" class="rounded-circle me-2" />
          <strong style="color: white">Table and bar</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="#">Salir</a></li>
        </ul>
      </div>
    </div>
    <div id="content">
      <main>
        <div class="welcome" style="justify-content: center; margin-top: 25vh;">
          <div class="px-4 py-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis" style="color: #2a3c45 !important">
              Welcome!
            </h1>
            <div class="col-lg-6 mx-auto" style="width: auto;">
              <p class="lead mb-4">
                To start, please click on any category.<br />
                Enjoy while learning!
                <br>
                <small>(If the website has problems showing content, please close the categories.)</small>
              </p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"></div>
            </div>
          </div>
        </div>
        <!-- ingredients -->
        <div class="containerCards">
          <div class="row mb-2">
            <?php
            if ($result = mysqli_query($varConexion, "SELECT * FROM ingredients")) {
              $count = 0;

              while ($row = $result->fetch_array(MYSQLI_NUM)) {
                if ($count % 2 == 0) {
                  echo '</div><div class="row mb-2">';
                }
            ?>
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative " style="max-height:40vh !important; width:auto;">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary-emphasis">Ingredient <?php echo $count + 1; ?></strong>
                      <h3 class="mb-0"><?php echo $row[1]; ?></h3>
                      <p class="card-text mb-auto">
                        <td><?php echo $row[2]; ?></td>
                      </p>

                      <audio controls style="width: 80%; margin-right: 50px !important; ">
                        <source src="data:audio/mpeg;base64,<?php echo base64_encode($row[3]); ?>" type="audio/mpeg" />
                      </audio>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <img src="data:image/jpeg;base64,<?php echo base64_encode($row[4]); ?>" alt="Imagen" style="height: 250px" />
                    </div>
                  </div>
                </div>
            <?php
                $count++;
              }
            }
            ?>
          </div>
        </div>

        <!-- costumers -->
        <div class="containerCustomer">
          <div class="row justify-content-center">
            <?php
            if ($result = mysqli_query($varConexion, "SELECT * FROM customerservice")) {
              $count = 0;

              while ($row = $result->fetch_array(MYSQLI_NUM)) {
            ?>
                <div class="col-12 col-xxl-4">
                  <div class="cardCus mt-3 mx-auto">
                    <div class="cardCus-image" style="background-image: url('data:image/jpeg;base64,<?php echo base64_encode($row[4]); ?>');">
                      <h4><?php echo $row[1]; ?></h4>
                    </div>
                    <div class="cardCus-body">
                      <div class="controls">
                        <a data-action="drawer" href="#">
                          <i class="up"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3F9944" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                              <line x1="12" y1="19" x2="12" y2="5"></line>
                              <polyline points="5 12 12 5 19 12"></polyline>
                            </svg></i>
                          <i class="down"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3F9944" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                              <line x1="12" y1="5" x2="12" y2="19"></line>
                              <polyline points="19 12 12 19 5 12"></polyline>
                            </svg></i>
                        </a>
                        <audio id="audioControls" controls style="float: right; height:40px; margin-top:5px;">
                          <source src="data:audio/mpeg;base64,<?php echo base64_encode($row[3]); ?>" type="audio/mp3">
                        </audio>

                        <div class="containerControls mx-auto mb-3">
                          <button onclick="playControls()" class="btn"><img src="audioIcons/play.svg" alt=""></button>
                          <button onclick="audioControls()" class="btn"><img src="audioIcons/volume-1.svg" alt=""></button>
                        </div>
                      </div>
                      <h4><?php echo $row[1]; ?></h4>
                      <p>
                        <?php echo nl2br($row[2]); ?>
                      </p>
                    </div>
                  </div>
                </div>
            <?php
                $count++;
              }
            }
            ?>
          </div>
        </div>
        <!-- Cocktails -->

        <!-- modal -->
        <div class="containerCocktails">
          <div class="row py-3">
            <?php
            if ($result = mysqli_query($varConexion, "SELECT * FROM cocktails")) {
              $count = 0;

              while ($row = $result->fetch_array(MYSQLI_NUM)) {
                if ($count % 3 == 0 && $count != 0) {
                  echo '</div><div class="row mt-4">';
                }
            ?>
                <div class="modal fade custom-modal" id="exampleModalCenter<?php echo $row[0]; ?>" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalCenterTitle">Details of: <?php echo $row[1]; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p class="pModal" id="pModal">
                          <strong>Ingredients: </strong> <?php echo nl2br($row[3]); ?>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <audio controls style="width: 80%; margin-right: 50px !important; ">
                          <source src="data:audio/mpeg;base64,<?php echo base64_encode($row[4]); ?>" type="audio/mpeg" />
                        </audio>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ends modal -->

                <!-- cocktail -->
                <div class="col col-4 text-center">
                  <img src="data:image/jpeg;base64,<?php echo base64_encode($row[5]); ?>" alt="" style="border-radius: 50%; height:8vw;">
                  <h2 class="fw-normal"><?php echo $row[1]; ?></h2>
                  <p><?php echo $row[2]; ?></p>
                  <p><a class="btn btn-primary" href="#" style="background-color: #3F9944 !important; border: none;" data-bs-toggle="modal" data-bs-target="#exampleModalCenter<?php echo $row[0]; ?>">View ingredients &raquo;</a></p>
                </div>
                <!-- ends cocktail -->

            <?php
                $count++;
              }
            }
            ?>
          </div>
        </div>
        <!-- slang -->
        <div class="containerSlang mt-5">
          <div class="container">
            <div class="row">
              <?php
              if ($result = mysqli_query($varConexion, "SELECT * FROM slang")) {
                $count = 0;

                while ($row = $result->fetch_array(MYSQLI_NUM)) {
                  if ($count % 3 == 0) {
                    echo '</div><div class="row mb-2">';
                  }
              ?>
                  <div class="col-md-4">
                    <div class="card-wrapper">
                      <div class="thumbnail-container">
                        <a>
                          <img src="data:image/jpeg;base64,<?php echo base64_encode($row[4]); ?>" alt="Imagen" style="height: 25vh; width: 100%; object-fit: cover;" />
                        </a>
                      </div>
                      <div class="card-details-container">
                        <div class="card-title">
                          <a href="#<?php echo $row[1]; ?>"><?php echo $row[1]; ?></a>
                        </div>
                        <div class="card-description">
                          <span class="price"><?php echo $row[2]; ?></span>
                        </div>
                        <div class="card-details-bottom">
                          <audio controls style="width: 80%; margin-left:9%;">
                            <source src="data:audio/mpeg;base64,<?php echo base64_encode($row[3]); ?>" type="audio/mpeg" />
                          </audio>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                  $count++;
                }
              }
              ?>
            </div>
          </div>
        </div>
        <!-- Games -->
        <div class="containerGames">
          <a href="https://es.educaplay.com/recursos-educativos/16074806-mesa_y_bar.html.php">Jugar al juego</a>
          <a href="https://es.educaplay.com/recursos-educativos/16074549-mesa_y_bar.html.php">Jugar al juego</a>
          <a href="https://es.educaplay.com/recursos-educativos/16074624-juego_de_memoria_mesa_y_bar.html.php">Jugar al juego</a>
          <a href="https://quizizz.com/admin/quiz/6504513d5f92987784c98c66?source=quiz_share.php">Jugar al juego</a>


        </div>
      </main>
    </div>
  </div>

  <script src="index.js"></script>
  <script src="audio.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>