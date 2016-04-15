<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Organizations | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

  $greek_organizations = array(
    array(
      'organization'  =>  'Benton Engineering Council',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Beta Upsilon Chi',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Black Student Union',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Campus Juice',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Delta Nu Zeta',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Epsilon Sigma Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Florida Athletic Training',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Florida Cicerones',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Freshman Leadership Council',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Gamma Eta',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Gator Band',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Heal the World',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Health Quality Outreach Improvement',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'HOSA',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Levin College of Law',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Omega Phi Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Pre-Student Osteopathic Medical Association',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Preview Staff',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Sabor Latino',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Sigma Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'SOTA',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'SPTA',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Theta Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Theta Tau',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF Medlife',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF Model United Nations',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF College of Medicine',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF College of Pharmacy (PPAG)',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF Honors Program',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF Premed AMSA',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Alpha Epsilon Phi',
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
      'organization'  =>  'Alpha Tau Omega',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Beta Theta Pi',
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
      'organization'  =>  'Delta Chi',
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
      'organization'  =>  'Delta Phi Epsilon',
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
      'organization'  =>  'Kappa Alpha Theta',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Kappa Alpha',
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
      'organization'  =>  'Lambda Chi Alpha',
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
      'organization'  =>  'Phi Sigma Kappa',
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
      'organization'  =>  'Pi Kappa Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Pi Kappa Phi',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Pi Lambda Phi',
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
      'organization'  =>  'Sigma Phi Lambda',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Tau Epsilon Phi',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Tau Kappa Epsilon',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Zeta Beta Tau',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Zeta Tau Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Theta Chi',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Alpha Chi Omega',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Alpha Delta Pi',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Asian American Student Union',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Campus Diplomats',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'CMA EDU',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'College of Public Health and Health Professions',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'CRU at UF',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Dancin&#39; Gators',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Dream Team',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'English Language Institute',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Florida Club Swim & Dive',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Freshman Leadership Engineering Group',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Gamma Phi Beta',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Gator Alliance for World Health',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'HakeemGetzYouGainz',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Jewish Student Union',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'National Society of Collegiate Scholars',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Phi Delta Theta',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Pi Sigma Alpha',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'The Involvement Team',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'The Really Independent Florida Crocodile',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF College of Nursing',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'UF Student Government',
      'link'          =>  ''
    ),
    array(
      'organization'  =>  'Alpha Epsilon Pi',
      'link'          =>  ''
    )
  );

  function compareAlphabetically($a, $b) {
    return strcmp($a['organization'], $b['organization']);
  }
  usort($greek_organizations, 'compareAlphabetically');
?>

<div class="page-heading parallax get-involved">
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
            <li><a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=786" target="_blank">Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a class="active">Organizations</a></li>
						<li><a href="/captain-teams" >Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
            <li><a href="/ftkrew">FTKrew</a></li>
<!--            <li><a href="/overall-applications">Overall Applications</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
  		<?php if ($status == "open") { ?>
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
  			<p>If your organization would like to participate contact the Recruitment Overall, Joey Whelihan, at <a href="mailto:jwhelihan@floridadm.org">jwhelihan@floridadm.org</a></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
  		</div>
    </div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
