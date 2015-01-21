<?php
	$GLOBALS['page_title'] = 'Organizations | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
  
  $greek_organizations = array(
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
						<li><a href="http://floridadm.kintera.org/faf/home/waiver.asp?ievent=1114670&lis=1&kntae1114670=49B319BD1C5D464982B0286ECCA2EBEB" target="_blank">Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a class="active">Organizations</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
						<li><a href="/staffapp">Staff Application</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
        <h3>Special Interest Organizations</h3>
        <table class="table table-bordered table-middle">
          <tbody>
            <tr>
              <td class="col-sm-3">Benton Engineering Council</td>
              <td class="col-sm-3">Beta Upsilon Chi</td>
              <td class="col-sm-3">Black Student Union</td>
              <td class="col-sm-3">Campus Juice</td>
            </tr>
            <tr>
              <td>Delta Nu Zeta</td>
              <td>Epsilon Sigma Alpha</td>
              <td>Florida Athletic Training</td>
              <td>Florida Cicerones</td>
            </tr>
            <tr>
              <td>Freshman Leadership Council</td>
              <td>Gamma Eta</td>
              <td>Gator Band</td>
              <td>Heal the World</td>
            </tr>
            <tr>
              <td>Health Quality Outreach Improvement</td>
              <td>HOSA</td>
              <td>IRHA</td>
              <td>Levin College of Law</td>
            </tr>
            <tr>
              <td>Omega Phi Alpha</td>
              <td>Pre-Student Osteopathic Medical Association</td>
              <td>Preview Staff</td>
              <td>Sabor Latino</td>
            </tr>
            <tr>
              <td>Sigma Alpha</td>
              <td>SOTA</td>
              <td>SPTA</td>
              <td>Theta Alpha</td>
            </tr>
            <tr>
              <td>Theta Tau</td>
              <td>UF Medlife</td>
              <td>UF Model United Nations</td>
              <td>UF College of Medicine</td>
            </tr>
            <tr>
              <td>UF College of Pharmacy (PPAG)</td>
              <td>UF Honors Program</td>
              <td>UF Premed AMSA</td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <h3>Greek Organizations</h3>
        <table class="table table-bordered table-middle">
          <tbody>
          <?php
          for($i = 0; $i < count($greek_organizations); $i++) {
            if($i % 4 == 0) {
              echo '<tr>';
            }
            if($i <= 3) {
              echo '<td class="col-sm-3">';
            } else {
              echo '<td>';
            }
            if($greek_organizations[$i]['link'] !== '') {
              echo '<a href="'.$greek_organizations[$i]['link'].'"></td>';
            } else {
              echo $greek_organizations[$i]['organization'].'</td>';
            }
            if(($i - 3) % 4 == 0) {
              echo '</tr>';
            }
          } ?>
          </tbody>
        </table>
  		</div>
    </div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
