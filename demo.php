<?php
/**
*   demo
*   -----------------------------
*
*   homepage for the site.
*
*/


// congif
//
include 'includes/config.inc.php';



// $SESS testing vars
//


// redirect for private user/admin pages
// - function();



// mysql conn script
//
include 'includes/mysql_connect.inc.php';


// include header
include 'includes/header.php';

/*PAGE CONTENT STARTS HERE*/
?>


  <!-- Demo Text Effects
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="demo-text" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">Demo Text Effects</h2>
      </div>
      <div class="row">
        <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia soluta nesciunt eaque, facilis illo illum laborum obcaecati deleniti sint odio at quam. Unde ducimus, nostrum ratione maiores, deserunt perspiciatis aperiam!</p>
        <p class="text-info">Accusantium perferendis ipsam nihil dolores ducimus nam impedit possimus, quo laborum deserunt esse facere repudiandae atque magni illum sunt amet ea sapiente consequatur. Molestias minus sequi, facilis. Adipisci, aliquid, accusantium.</p>
        <p class="text-warning">Molestiae accusamus cum molestias, possimus reprehenderit unde, mollitia blanditiis laboriosam numquam, hic voluptatem vero. Aut veritatis debitis voluptatibus dolor vitae enim labore quas nobis nesciunt sapiente. Aut praesentium ullam temporibus.</p>
        <p class="text-error">Fuga laboriosam, aperiam minus sapiente non repudiandae eum excepturi officiis vitae! Earum quaerat doloremque, voluptatum dolores, dolorum et assumenda? Quae est dicta architecto soluta cumque expedita dolores repellendus nisi totam!</p>
        <div class="alert alert-success" role="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae vitae distinctio veniam reprehenderit accusantium at amet similique, maiores placeat natus perferendis voluptate delectus facilis, voluptas, doloremque architecto. Id, cupiditate
          debitis.
        </div>
        <div class="alert alert-info" role="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, temporibus praesentium magni cumque nemo non libero quo amet, repellendus mollitia dicta, repellat adipisci explicabo excepturi! Quos libero, pariatur corrupti architecto.</div>
        <div class="alert alert-warning" role="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem atque, non commodi voluptatem, blanditiis, minima neque fuga unde quod veniam officia. Eaque fugit est eius, quaerat similique, quasi explicabo placeat.</div>
        <div class="alert alert-error" role="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet amet, omnis quibusdam voluptatem similique aliquam, officiis exercitationem placeat sapiente earum provident, asperiores perferendis autem debitis! Nam commodi accusamus alias!</div>
      </div>
    </div>
  </section>

<?php



// include footer
include 'includes/footer.php';