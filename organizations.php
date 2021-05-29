<?php
$status = "open";
$GLOBALS['page_title'] = 'Organizations | Get Involved | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");

$greek_organizations = array(
  array(
    'organization'  =>  'Alpha Chi Omega',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Delta Pi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Epsilon Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Epsilon Pi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Epsilon Delta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Gamma Rho',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Omicron Pi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Phi Omega',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Alpha Tau Omega',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'AMSA',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Beta Theta Pi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Catholic Gators',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Chi Omega',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Chi Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'CHSC',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'College of Education',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'College of Medicine',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'College of Nursing',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'College of Pharmacy',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Cupcakes for a Cure',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Dancin&#39; Gators',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Delta Delta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Gamma',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Nu Zeta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Phi Epsilon',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Sigma Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Tau Delta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Upsilon',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Delta Zeta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Doctors Without Borders Student Chapter',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Dream Team',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Epsilon Sigma Alpha',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Extreme Dance Company',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Footprints: Buddy and Support Program',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Gamma Eta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Gamma Phi Beta',
    'link'          =>  '',
    ),
  array(
    'organization'  =>  'Gator Band',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Hispanic Student Association',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Indian Student Association',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Kappa Alpha Order',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Kappa Alpha Theta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Kappa Delta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Kappa Kappa Gamma',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Kappa Phi Epsilon',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Kappa Sigma',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Lamba Chi Alpha',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'National Society of Collegiate Scholars',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Nina Karlinsky Memorial Team',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Omega Phi Alpha',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Delta Theta',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Epsilon Kappa',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Eta Sigma Honor Society',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Gamma Delta (FIJI)',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Kappa Tau',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Mu',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Phi Sigma Pi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Pi Beta Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Pi Delta Psi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Pi Kappa Alpha',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Pi Kappa Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Pi Lamba Phi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Pre-Legal Honor Society',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Preview Staff',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Public Health and Health Professions',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'SHPE',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Alpha',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Alpha Epsilon',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Chi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Kappa',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Nu',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Phi Epsilon',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Sigma Phi Lamda',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Society of Women Engineers',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Tau Kappa Epsilon',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'The Gator Aides',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'The Navigators',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Theta Alpha',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Theta Chi',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Theta Tau',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Tone Def A Cappella',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'UF Honors Program',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'UF Innovation Academy',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'UF MBA',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'UF MEDLIFE',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'UF Signing Gators',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'UFAA: Florida Cicerones',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Zeta Beta Tau',
    'link'          =>  ''
    ),
  array(
    'organization'  =>  'Zeta Tau Alpha',
    'link'          =>  ''
    )
  );

function compareAlphabetically($a, $b) {
  return strcmp($a['organization'], $b['organization']);
}
usort($greek_organizations, 'compareAlphabetically');
?>

<div class="page-heading parallax orgs">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Organizations</h1>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
            <li><a href="/alumni">Alumni</a></li>
            <li><a href="/ambassadors">Ambassadors</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
					  <li><a href="/kristynskrew">Kirstyn's Krew</a></li>
						<li><a class="active">Organizations</a></li>

          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
  		<?php if ($status == "open") { ?>
     <h3>Organizations</h3>
		  <p>Over 100 Organizations at the University of Florida participate in Dance Marathon every year!</p>
      <p>Organizations are the backbone of our philanthropy, and we are always looking for more people to join our family! If you would like to get your organization involved with Dance Marathon, please contact the Recruitment Overall, Olivia Humbard, at <a href=mailto:ohumbard@floridadm.org>ohumbard@floridadm.org</a></p>
      <p>Below are the Organizations currently involved in Dance Marathon at UF 2021:</p>

      <table class="table table-bordered table-middle">
        <tbody>
          <?php
          $column_number = 4;
          $total_orgs = count($greek_organizations);
          $increment = ceil($total_orgs/$column_number);
          $extra_cells = $increment * $column_number - $total_orgs;

          for($i = 0; $i < $increment; $i++) {
            echo '<tr>';
            for($j = $i; $j < $total_orgs + $extra_cells; $j += $increment) {
              if($j < $total_orgs) {
                if($i == 0) {
                  echo '<td class="col-sm-3">';
                } else {
                  echo '<td>';
                }
                if($greek_organizations[$j]['link'] !== '') {
                  echo '<a href="'.$greek_organizations[$j]['link'].'"></td>';
                } else {
                  echo $greek_organizations[$j]['organization'].'</td>';
                }
              } else {
                echo '<td>&nbsp;</td>';
              }
            }
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
      <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
  </div>
</div>
</div>

<?php include("includes/foot.php"); ?>
