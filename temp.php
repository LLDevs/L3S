<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');

?>
<div id="content">
  <div id="content-header">
    <?=breadcrumbs()?>
    <h1>Create New User</h1>
  </div>
  <div class="container-fluid">
    <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title">
              <span class="icon">
                <i class="icon-th">
                </i>
              </span>
              <h5>Data table</h5>
            </div>
            <div class="widget-content nopadding">
                    <table class="table table-bordered data-table dataTable" id="permissionTable">
                      <thead>
                        <tr>
                          <th>
                            Rendering engine
                        </th>
                        <th>Browser
                      </th>
                      <th>Platform(s)
                    </th>
                    <th>Engine version
                  </th>
                </tr>
              </thead>
              <tbody role="alert" aria-live="polite" aria-relevant="all">
                <tr class="gradeA odd">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Firefox 1.0</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center ">1.7</td>
                </tr>
                <tr class="gradeA even">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Firefox 1.5</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center ">1.8</td>
                </tr>
                <tr class="gradeA odd">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Firefox 2.0</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center ">1.8</td>
                </tr>
                <tr class="gradeA even">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Firefox 3.0</td>
                  <td class=" ">Win 2k+ / OSX.3+</td>
                  <td class="center ">1.9</td>
                </tr>
                <tr class="gradeA odd">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Camino 1.0</td>
                  <td class=" ">OSX.2+</td>
                  <td class="center ">1.8</td>
                </tr>
                <tr class="gradeA even">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Camino 1.5</td>
                  <td class=" ">OSX.3+</td>
                  <td class="center ">1.8</td>
                </tr>
                <tr class="gradeA odd">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Netscape 7.2</td>
                  <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                  <td class="center ">1.7</td>
                </tr>
                <tr class="gradeA even">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Netscape Browser 8</td>
                  <td class=" ">Win 98SE+</td>
                  <td class="center ">1.7</td>
                </tr>
                <tr class="gradeA odd">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Netscape Navigator 9</td>
                  <td class=" ">Win 98+ / OSX.2+</td>
                  <td class="center ">1.8</td>
                </tr>
                <tr class="gradeA even">
                  <td class="  sorting_1">Gecko</td>
                  <td class=" ">Mozilla 1.0</td>
                  <td class=" ">Win 95+ / OSX.1+</td>
                  <td class="center ">1</td>
                </tr>
              </tbody>
            </table>

        </div>
      </div>
    </div>
    <?php

dump($data);

     ?>
  </div>
</div>
</div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
