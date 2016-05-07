<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:16:37
  from "C:\wamp\www\assignment_web\admincp\views\dashboard\v_dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a0445452ed9_91982443',
  'file_dependency' => 
  array (
    '7671638cf3e50ad2d0fe28ee7742b111bd7573b9' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\dashboard\\v_dashboard.tpl',
      1 => 1461598723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572a0445452ed9_91982443 ($_smarty_tpl) {
?>
<!--chart dashboard start-->
<div id="chart-dashboard">
  <div class="row">
    <div class="col s12 m8 l8">
      <div class="card">
        <div class="card-move-up waves-effect waves-block waves-light">
          <div class="move-up cyan darken-1">
            <div> <span class="chart-title white-text">Revenue</span>
              <div class="chart-revenue cyan darken-2 white-text">
                <p class="chart-revenue-total">$4,500.85</p>
                <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
              </div>
              <div class="switch chart-revenue-switch right">
                <label class="cyan-text text-lighten-5"> Month
                  <input type="checkbox">
                  <span class="lever"></span> Year </label>
              </div>
            </div>
            <div class="trending-line-chart-wrapper">
              <canvas id="trending-line-chart" height="70"></canvas>
            </div>
          </div>
        </div>
        <div class="card-content"> <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
          <div class="col s12 m3 l3">
            <div id="doughnut-chart-wrapper">
              <canvas id="doughnut-chart" height="200"></canvas>
              <div class="doughnut-chart-status">4500
                <p class="ultra-small center-align">Sold</p>
              </div>
            </div>
          </div>
          <div class="col s12 m2 l2">
            <ul class="doughnut-chart-legend">
              <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
              <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
              <li class="home ultra-small"><span class="legend-color"></span> Home</li>
            </ul>
          </div>
          <div class="col s12 m5 l6">
            <div class="trending-bar-chart-wrapper">
              <canvas id="trending-bar-chart" height="90"></canvas>
            </div>
          </div>
        </div>
        <div class="card-reveal"> <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
          <table class="responsive-table">
            <thead>
              <tr>
                <th data-field="id">ID</th>
                <th data-field="month">Month</th>
                <th data-field="item-sold">Item Sold</th>
                <th data-field="item-price">Item Price</th>
                <th data-field="total-profit">Total Profit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>January</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>2</td>
                <td>February</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>3</td>
                <td>March</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>4</td>
                <td>April</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>5</td>
                <td>May</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>6</td>
                <td>June</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>7</td>
                <td>July</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>8</td>
                <td>August</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Septmber</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Octomber</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>11</td>
                <td>November</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>December</td>
                <td>122</td>
                <td>100</td>
                <td>$122,00.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-move-up teal waves-effect waves-block waves-light">
          <div class="move-up">
            <p class="margin white-text">Browser Stats</p>
            <canvas id="trending-radar-chart" height="114"></canvas>
          </div>
        </div>
        <div class="card-content  teal darken-2"> <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
          <div class="line-chart-wrapper">
            <p class="margin white-text">Revenue by country</p>
            <canvas id="line-chart" height="114"></canvas>
          </div>
        </div>
        <div class="card-reveal"> <span class="card-title grey-text text-darken-4">Revenue by country <i class="mdi-navigation-close right"></i></span>
          <table class="responsive-table">
            <thead>
              <tr>
                <th data-field="country-name">Country Name</th>
                <th data-field="item-sold">Item Sold</th>
                <th data-field="total-profit">Total Profit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>USA</td>
                <td>65</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>UK</td>
                <td>76</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>Canada</td>
                <td>65</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>Brazil</td>
                <td>76</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>India</td>
                <td>65</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>France</td>
                <td>76</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>Austrelia</td>
                <td>65</td>
                <td>$452.55</td>
              </tr>
              <tr>
                <td>Russia</td>
                <td>76</td>
                <td>$452.55</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--chart dashboard end--> 

<!--card stats start-->
<div id="card-stats">
  <div class="row">
    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-content  green white-text">
          <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
          <h4 class="card-stats-number">566</h4>
          <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span> </p>
        </div>
        <div class="card-action  green darken-2">
          <div id="clients-bar"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-content purple white-text">
          <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
          <h4 class="card-stats-number">$8990.63</h4>
          <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span> </p>
        </div>
        <div class="card-action purple darken-2">
          <div id="sales-compositebar"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-content blue-grey white-text">
          <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
          <h4 class="card-stats-number">$806.52</h4>
          <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span> </p>
        </div>
        <div class="card-action blue-grey darken-2">
          <div id="profit-tristate"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-content deep-purple white-text">
          <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
          <h4 class="card-stats-number">1806</h4>
          <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span> </p>
        </div>
        <div class="card-action  deep-purple darken-2">
          <div id="invoice-line"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--card stats end--> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!--card widgets start-->
<div id="card-widgets">
  <div class="row">
    <div class="col s12 m12 l4">
      <ul id="task-card" class="collection with-header">
        <li class="collection-header cyan">
          <h4 class="task-card-title">My Task</h4>
          <p class="task-card-date">March 26, 2015</p>
        </li>
        <li class="collection-item dismissable">
          <input type="checkbox" id="task1" />
          <label for="task1">Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a> </label>
          <span class="task-cat teal">Mobile App</span> </li>
        <li class="collection-item dismissable">
          <input type="checkbox" id="task2" />
          <label for="task2">Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a> </label>
          <span class="task-cat purple">Web API</span> </li>
        <li class="collection-item dismissable">
          <input type="checkbox" id="task3" checked="checked" />
          <label for="task3">Check the new Mockup of ABC. <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a> </label>
          <span class="task-cat pink">Mockup</span> </li>
        <li class="collection-item dismissable">
          <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
          <label for="task4">I did it !</label>
          <span class="task-cat cyan">Mobile App</span> </li>
      </ul>
    </div>
    <div class="col s12 m6 l4">
      <div id="flight-card" class="card">
        <div class="card-header amber darken-2">
          <div class="card-title">
            <h4 class="flight-card-title">Flight</h4>
            <p class="flight-card-date">June 18, Thu 04:50</p>
          </div>
        </div>
        <div class="card-content-bg white-text">
          <div class="card-content">
            <div class="row flight-state-wrapper">
              <div class="col s5 m5 l5 center-align">
                <div class="flight-state">
                  <h4 class="margin">LDN</h4>
                  <p class="ultra-small">London</p>
                </div>
              </div>
              <div class="col s2 m2 l2 center-align"> <i class="mdi-device-airplanemode-on flight-icon"></i> </div>
              <div class="col s5 m5 l5 center-align">
                <div class="flight-state">
                  <h4 class="margin">SFO</h4>
                  <p class="ultra-small">San Francisco</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s6 m6 l6 center-align">
                <div class="flight-info">
                  <p class="small"><span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                  <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                  <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> B</p>
                </div>
              </div>
              <div class="col s6 m6 l6 center-align flight-state-two">
                <div class="flight-info">
                  <p class="small"><span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                  <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                  <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> C</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l4">
      <div id="profile-card" class="card">
        <div class="card-image waves-effect waves-block waves-light"> <img class="activator" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/bg_admin.jpg" alt="user background"> </div>
        <div class="card-content"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
/images/avatar.jpg" alt="" class="circle responsive-img activator card-profile-image"> <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right"> <i class="mdi-editor-mode-edit"></i> </a> <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
          <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
          <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
          <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
        </div>
        <div class="card-reveal"> <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
          <p>Here is some more information about this card.</p>
          <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
          <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
          <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
          <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
          <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--card widgets end--> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!--work collections start-->
<div id="work-collections">
  <div class="row">
    <div class="col s12 m12 l6">
      <ul id="projects-collection" class="collection">
        <li class="collection-item avatar"> <i class="mdi-file-folder circle light-blue darken-2"></i> <span class="collection-header">Projects</span>
          <p>Your Favorites</p>
          <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a> </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s6">
              <p class="collections-title">Web App</p>
              <p class="collections-content">AEC Company</p>
            </div>
            <div class="col s3"> <span class="task-cat cyan">Development</span> </div>
            <div class="col s3">
              <div id="project-line-1"></div>
            </div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s6">
              <p class="collections-title">Mobile App for Social</p>
              <p class="collections-content">iSocial App</p>
            </div>
            <div class="col s3"> <span class="task-cat grey darken-3">UI/UX</span> </div>
            <div class="col s3">
              <div id="project-line-2"></div>
            </div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s6">
              <p class="collections-title">Website</p>
              <p class="collections-content">MediTab</p>
            </div>
            <div class="col s3"> <span class="task-cat teal">Marketing</span> </div>
            <div class="col s3">
              <div id="project-line-3"></div>
            </div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s6">
              <p class="collections-title">AdWord campaign</p>
              <p class="collections-content">True Line</p>
            </div>
            <div class="col s3"> <span class="task-cat green">SEO</span> </div>
            <div class="col s3">
              <div id="project-line-4"></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col s12 m12 l6">
      <ul id="issues-collection" class="collection">
        <li class="collection-item avatar"> <i class="mdi-action-bug-report circle red darken-2"></i> <span class="collection-header">Issues</span>
          <p>Assigned to you</p>
          <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a> </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s7">
              <p class="collections-title"><strong>#102</strong> Home Page</p>
              <p class="collections-content">Web Project</p>
            </div>
            <div class="col s2"> <span class="task-cat pink accent-2">P1</span> </div>
            <div class="col s3">
              <div class="progress">
                <div class="determinate" style="width: 70%"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s7">
              <p class="collections-title"><strong>#108</strong> API Fix</p>
              <p class="collections-content">API Project </p>
            </div>
            <div class="col s2"> <span class="task-cat yellow darken-4">P2</span> </div>
            <div class="col s3">
              <div class="progress">
                <div class="determinate" style="width: 40%"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s7">
              <p class="collections-title"><strong>#205</strong> Profile page css</p>
              <p class="collections-content">New Project </p>
            </div>
            <div class="col s2"> <span class="task-cat light-green darken-3">P3</span> </div>
            <div class="col s3">
              <div class="progress">
                <div class="determinate" style="width: 95%"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s7">
              <p class="collections-title"><strong>#188</strong> SAP Changes</p>
              <p class="collections-content">SAP Project</p>
            </div>
            <div class="col s2"> <span class="task-cat pink accent-2">P1</span> </div>
            <div class="col s3">
              <div class="progress">
                <div class="determinate" style="width: 10%"></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--work collections end--> <?php }
}
