<!DOCTYPE html>
<?php
  $json = file_get_contents("https://sheetsu.com/apis/b5f9f24a");

  print_r($json);
  // print_r($json);
  $content = json_decode($json);
  // echo "<pre>";
  // print_r($content);
  // echo "</pre>";

  $popup_id = isset($_GET['t']) ? $_GET['t'] : "";
  $page_id = isset($_GET['p']) ? $_GET['t'] : "";

  $target = array_values(array_filter($content->result, function($d) use ($popup_id) { return $d->id == $popup_id; }));

?>
<?php if (count($target) > 0): ?>
  <meta property="og:url" content="http://www.unocha.org/humanity360/index.php?t=<?php echo $popup_id ?>#p=<?php echo $page_id ?>&t=<?php echo $popup_id ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="The Challenges We Face Today, and Building a Better Tomorrow" />
  <title>تحديات نواجهها اليوم بناء غدٍ أفضل</title>
  <meta property="og:description" content="<?php echo strip_tags(str_replace('"', '', $target[0]->content)) . ""; ?>" />
  <meta property="og:image" content="<?php echo $target[0]->socialImage ?>" />
  <meta property="og:image:url" content="<?php echo $target[0]->socialImage ?>" />
<?php else: ?>
  <meta property="og:url" content="http://www.unocha.org/humanity360/index.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="The Challenges We Face Today, and Building a Better Tomorrow" />
  <meta property="og:description" content="يسلط الضوء على التحديات والفرص في بيئة الأزمات الإنسانية مبيناً تطور للمشهد الإنساني في عالم سريع التغير" />
  <meta property="og:image" content="https://ocha.smugmug.com/Countries/IRQ/May-2015-CSB-mission/i-vhzsxjj/0/XL/605A3700-XL.jpg" />
  <meta property="og:image:url" content="https://ocha.smugmug.com/Countries/IRQ/May-2015-CSB-mission/i-vhzsxjj/0/XL/605A3700-XL.jpg" />
  <title>The Challenges We Face Today, and Building a Better Tomorrow</title>
<?php endif; ?>
<meta property="description" content="يسلط الضوء على التحديات والفرص في بيئة الأزمات الإنسانية مبيناً تطور للمشهد الإنساني في عالم سريع التغير" />


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<link href='./assets/css/base.css' rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>
<section id='un-whdt-more' class='subpage'>
  <div class='viewport'>
    <article id='whdt-more-content' class='content'>
      <div class='half-content left-cont'></div>
      <div class='half-content right-cont'>
        <div class='subsection'>
          <h1>البيانات والإتجاهات الإنسانية العالمية</h1>
        </div>
        <nav>
          <ul>
            <li><a href='http://online.fliphtml5.com/srhi/mtgf/' class='pop-change link-icon' target='_blank'>
                  <i class='spr icon spr-book'></i>
                  <span class='ar-x'>عرض النسخة الإلكترونية </span></a></li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/WHDT2015.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span class='ar-x'>تحميل التقرير كامل </span>
                </a>
            </li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/WHDT_2015%20Global%20Landscape%20ART.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span class='ar-x'>تحميل نشرة المشهد العالمي </span>
                </a>
            </li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/WHDT_2015%20Highlights(ART)2.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span class='ar-x'>تحميل نشرة تسليط الضوء </span>
                </a>
            </li>
            <li>
              <a href='https://goo.gl/N7q66N' target='_blank' class='link-icon'>
                <i class='spr icon spr-dl'></i><span class='ar-x'>مجموعة البيانات</span>
              </a>

            </li>
            <li>&nbsp;</li>
            <li><a href='javascript: void(null)' onclick='NavControl.toWHDT()' class='link-icon'>
                  <i class='spr icon spr-whdt'></i>
                  <span class='ar-x'>الرجوع</span></a></li>
            <li><a href='javascript: void(null)' onclick='NavControl.toHome()' class='link-icon'>
                  <i class='spr icon spr-un'></i>
                  <span class='ar-x'>الرئيسية</span></a></li>
        </nav>
        <div class='subsection information-gap'>
          <h1 class='ar-x'>فجوة في المعلومات</h1>
          <p class='ar-x'>نظراً للطبيعة المعقدة للأزمات الإنسانية، هناك العديد من الثغرات في المعلومات المتوفرة. هذا بالإضافة إلى مرونة مفاهيم الاحتياجات والمساعدات الإنسانية و التحيز الكامن في المعلومات. من أجل فهم وقياس الأثر بشكل واضح ، فإن المجتمع الإنساني بحاجة إلى مواصلة العمل على المعايير وطرق جمع وتبادل واستخدام بيانات أفضل.</p>
        </div>
      </div>
    </article>
  </div>
</section>

<section id='un-he-more' class='subpage'>
  <div class='viewport'>
    <article id='whdt-more-content' class='content'>
      <div class='half-content left-cont'>
        <div id='pyramid-top' class='pyramid-level'>
          <input type='checkbox' id='pyramid-top-check' checked='checked'/>
          <label for='pyramid-top-check'><span class='mark'></span> <span class='pyramid-description'>Crisis-affected people have the right to assistance and protection that is</span></label>
          <div class='pyramid-list'>
            <div class='pyramid-item pyramid-item-3'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-relevant'>Relevant</a>
            </div>
            <div class='pyramid-item pyramid-item-3'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-timely'>Timely</a>
            </div>
            <div class='pyramid-item pyramid-item-3'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-accountable'>Accountable</a>
            </div>
          </div>
          <sub><strong>Results:</strong> these elements describe the desired results, as a result of humanitarian action</sub>
        </div>
        <!-- Mid -->
        <div id='pyramid-mid' class='pyramid-level'>
            <input type='checkbox' id='pyramid-mid-check' checked='checked'/>
            <label for='pyramid-mid-check'>
              <span class='mark'></span>
              <span class='pyramid-description'>Those Reaching Crisis-affected people should be</span>
            </label>
            <div class='pyramid-list'>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-complementary'>Complementary</a>
              </div>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-connected'>Connected</a>
              </div>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-coherent'>Coherent</a>
              </div>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-nimble'>Nimble</a>
              </div>
            </div>
            <sub><strong>Practice:</strong> these elements describe the desired behaviour and approach for any actor in achieving results.</sub>
        </div>

        <!-- bottom -->
        <div id='pyramid-bot' class='pyramid-level'>
          <input type='checkbox' id='pyramid-bot-check' checked='checked'/>
          <label for='pyramid-bot-check'>
            <span class='mark'></span>
            <span class='pyramid-description'>The environment for humanitarian action must be enabled by</span>
          </label>
          <div class='pyramid-list'>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-respect'>Respect for Principles</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-leadership'>Leadership</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-resources'>Resources</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-info'>Information and Evidence</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-governance'>Governance</a>
            </div>
          </div>
          <sub><strong>Enablers:</strong> These are some of the essential enabled that must be part of the operating environment in order to achieve results.</sub>
        </div>
      </div>
      <div class='half-content right-cont'>
        <div class='subsection'>
          <h1 class='ar-x'>إطار الفعالية</h1>
          <p class='ar-x'>تلخص العناصر المذكورة أعلاه النتائج المستنبطة من الدراسة المعنية بفعالية العمل الإنساني. تهدف التحولات الخمس في السياسات إلى دعم المستويات الثلاثة من نتائج والممارسة والعوامل المساعدة.</p>
          <p style='font-size: 11px; margin-bottom: 10px; margin-top: 10px;' class='ar-x'>لمزيد من المعلومات، يرجى الضغط على أحد العناصر </p>
        </div>
        <nav>
          <ul>
            <li><a href='http://online.fliphtml5.com/dcnr/xpqh/' class='link-icon' target='_blank'>
                  <i class='spr icon spr-book'></i>
                  <span class='ar-x'>عرض النسخة الإلكترونية</span></a>
            </li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/HEStudy_20151109_Small.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span class='ar-x'>تحميل PDF</span>
                </a>
            </li>

            <li>&nbsp;<br/>&nbsp;</li>
            <li><a href='javascript: void(null)' onclick='NavControl.toHE()' class='link-icon'>
                  <i class='spr icon spr-he'></i>
                  <span class='ar-x'>الرجوع</span></a></li>
            <li><a href='javascript: void(null)' onclick='NavControl.toHome()' class='link-icon'>
                  <i class='spr icon spr-un'></i>
                  <span class='ar-x'>الرئيسية</span></a></li>
        </nav>
      </div>
    </article>
  </div>
</section>

<section id='un-home' data-isShowing='true'>
  <a href='./index.php' class='lang'>EN</a>
  <div class='separator'></div>
  <div class='logo'>
    <i class='spr spr-un-big'></i>
  </div>
  <article class='home-section' id='home-whdt'>
  <div class='gray-bg'></div>
  <div class='viewport-area'>
    <i class='spr spr-whdt-big'></i>
       <h1 class='ar-x'>تحديات نواجهها اليوم </h1>
       <h3>
         <span class='ar-x'>البيانات والإتجاهات الإنسانية العالمية </span>
         <!-- <i class='spr spr-whdt'></i> -->
       </h3>
       <p style='margin-top: 53px;' class='ar-x'>يسلط الضوء على التحديات والفرص في بيئة الأزمات الإنسانية مبيناً تطور للمشهد الإنساني في عالم سريع التغير</p>
       <p class='explore-button'>
         <a href='javascript: void(null);' class='ar-x white-border' onclick="NavControl.toWHDT()">إستكشف</a>
       </p>
  </div>
  </article>
  <article class='home-section' id='home-he' style='text-align: left;'>
  <div class='gray-bg'></div>
  <div class='viewport-area'>
    <i class='spr spr-he-big'></i>
      <h1 class='ar-x'>بناء غدٍ أفضل</h1>
      <h3>
        <!-- <i class='spr spr-he'></i> -->
        <span class='ar-x'>لن نترك أحد: فعالية العمل الإنساني في عصر الأهداف التنموية المستدامة</span>
      </h3>
      <p class='ar-x'>إستكشاف ما تعنيه فعالية العمل الإنساني في عالمنا اليوم - من الأفضل الاستجابة لاحتياجات المتضريين من الأزمات، من الأفضل إنهاء معاناة الأشخاص من الأزمة
      </p>
      <p class='explore-button'>
        <a href='javascript: void(null);' class='white-border ar-x' onclick="NavControl.toHE()">إستكشف</a>
      </p>
  </div>
  </article>
  <form id='un-he-whdt'>
    <input type='hidden' name='p' name='page'/>
    <input type='hidden' name='t' title='target'/>
  </form>
</section>
<section id='un-whdt' class='subpage'>
  <div class='viewport'>
    <nav>
      <ul>
          <li style='margin-bottom: 70px'>
            <a href='javascript: void(null);' class='information-item link-icon' onclick='NavControl.toWHDTMore()'>
            <i class='spr spr-info icon'></i><span style='font-weight: 600; font-size: 24px;' class='ar-x'>مزيد من المعلومات</span></a></li>
        <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHE()'>
          <i class='spr icon spr-he'></i><span class='ar-x'>بناء غدٍ أفضل </span></a></li>
        <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHome()'><i class='spr icon spr-un'></i><span class='ar-x'>الرئيسية</span></a></li>

      </ul>
    </nav>
    <article id='un-whdt-1' class='subsubpage ar'>
      <div class='hover-item'>
        <h1>تحدي</h1><h3>تكلفة المساعدات الإنسانية </h3>
        <p></p>
        <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-whdt-1'>أكثر</a></p>
      </div>
    </article>
    <article id='un-whdt-2' class='subsubpage ar'>
      <div class='hover-item'>
        <h1>تحدي</h1><h3>الإتجاهات طويلة المدى في النزاعات</h3>
        <p></p>
        <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-whdt-2'>أكثر</a></p>
      </div>
    </article>
    <article id='un-whdt-3' class='subsubpage ar'>
      <div class='hover-item'>
        <h1>تحدي</h1><h3>أثر الأسلحة المتفجرة على المدنيين</h3>
        <p></p>
        <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-whdt-3'>أكثر</a></p>
      </div>
    </article>
    <article id='un-whdt-4' class='subsubpage ar'>
      <div class='hover-item'>
        <h1>فرص</h1><h3>أدوات تنسيق وجمع البيانات</h3>
        <p></p>
        <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-whdt-4'>أكثر</a></p>
      </div>
    </article>
    <article id='un-whdt-5' class='subsubpage ar'>
      <div class='hover-item'>
        <h1>فرص </h1><h3>التواصل الإجتماعي</h3>
        <p></p>
        <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-whdt-5'>أكثر</a></p>
      </div>
    </article>
  </div>
</section>
<section id='un-he' class='subpage'>
  <div class='viewport'>
    <article id='un-he-1' class='subsubpage ar'><div class='hover-item'>
      <h1>1</h1><h3>عزز ولا تستبدل</h3><h5></h5>
      <p>لا تستبدلوا القدرات وإستراتيجيات التأقلم القائمة</p>
      <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-he-1'>أكثر</a></p>
    </div></article>
    <article id='un-he-2' class='subsubpage ar'><div class='hover-item'><h1>2</h1>
      <h3>التدخل بهدف الخروج</h3><h5></h5>
      <p>تعاونوا من أجل تخفيف وإنهاء الاحتياجات الإنسانية</p>
      <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-he-2'>أكثر</a></p>
    </div></article>
    <article id='un-he-3' class='subsubpage ar'><div class='hover-item'><h1>3</h1><h3>رفع كفاءة الميزة النسبية</h3><h5></h5>
    <p>تقوية التواصل والقيادة الإستراتيجية</p>
    <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-he-3'>أكثر</a></p>
    </div></article>
    <article id='un-he-4' class='subsubpage ar'><div class='hover-item'><h1>4</h1><h3>360 درجة من الإنسانية</h3><h5></h5><p>تبني شامل لتحليل مركزي للاحتياجات والمخاطر</p>
      <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-he-4'>أكثر</a></p>
    </article>
    <article id='un-he-5' class='subsubpage ar'><div class='hover-item'><h1>5</h1><h3 style=' font-size: 26px;
    width: 480px;'>قياس النتائج المشتركة من اجل المساءلة الجماعية</h3><h5></h5><p></p>
      <p><a href='javascript: void(null)' class='pop-change white-border ar-x' data-target='un-he-5'>أكثر</a></p>
    </div></article>

    <nav>
      <div class='for-desktop'>
        <ul>
          <li id='he-what-next' class='ar'><a href='javascript: void(null);' class='information-item link-icon' onclick='NavControl.toHEMore()'><i class='spr icon spr-info-big'></i></a></li>

          <li><a class='link-icon' href='javascript: void(null);' onclick='NavControl.toWHDT()'><i class='spr icon spr-whdt'></i></a></li>
          <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHome()'>
            <i class='spr icon spr-un'></i></a></li>

        </ul>
      </div>
      <div class='for-mobile'>
        <ul>
             <li style='margin-bottom: 70px'>
              <a href='javascript: void(null);' class='information-item link-icon' onclick='NavControl.toHEMore()()'>
              <i class='spr spr-info icon'></i><span style='font-weight: 600; font-size: 24px;' class='ar-x'>ماذا بعد؟</span></a></li>
          <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toWHDT()'>
            <i class='spr icon spr-whdt'></i><span>The Challenges we Face Today</span></a></li>
          <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHome()'><i class='spr icon spr-un'></i><span>Home</span></a></li>

        </ul>
      </div>
    </nav>
  </div>
</section>

<script src='./assets/js/jquery.min.js'></script>
<script src='./assets/js/deparam.min.js'></script>
<script src='./assets/js/models.js'></script>
<script type='text/javascript'>
  window.ALLDATA = <?php echo $json; ?>;
  window.ALLPOPUP = [
    {id: "relevant", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=36"},
    {id: "timely", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=39"},
    {id: "accountable", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=41"},
    {id: "complementary", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=44"},
    {id: "connected", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=49"},
    {id: "coherent", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=54"},
    {id: "nimble", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=57"},
    {id: "respect", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=59"},
    {id: "leadership", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=61"},
    {id: "resources", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=63"},
    {id: "info", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=66"},
    {id: "governance", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=68"},
  ];
</script>
<script type='text/javascript'>
var original = {p: "", t: ""};
var NavControl = function() {
  return {
    toHome : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-home");
      $("#un-he-whdt").submit();
    },
    toHE : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-he");
      $("#un-he-whdt").submit();
    },
    toWHDT : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-whdt");
      $("#un-he-whdt").submit();
    },
    toWHDTMore : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-whdt-more");
      $("#un-he-whdt").submit();
    },
    toHEMore : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-he-more");
      $("#un-he-whdt").submit();
    },
    clearPopup: function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt").submit();
    }
  };
}();

var heSectionManager = SectionManager([
    new Section("article#un-he-1", { duration: 250 }),
    new Section("article#un-he-2", { duration: 500 }),
    new Section("article#un-he-3", { duration: 750 }),
    new Section("article#un-he-4", { duration: 1000 }),
    new Section("article#un-he-5", { duration: 1250 }),
  ]);

var whdtSectionManager = SectionManager([
    new Section("article#un-whdt-1", { duration: 1000 }),
    new Section("article#un-whdt-2", { duration: 500 }),
    new Section("article#un-whdt-3", { duration: 250 }),
    new Section("article#un-whdt-4", { duration: 1250 }),
    new Section("article#un-whdt-5", { duration: 750 }),
  ]);

var sectionManager = SectionManager([
  new Section("section#un-home", { isShowing: true }),
  new Section("section#un-whdt",
    { hide: { left: "-100vw" }, show: { left: "0vw" },
      onShow: function() { whdtSectionManager.showAll(); },
      onHide: function() { whdtSectionManager.hideAll(); } }),
  new Section("section#un-he", { hide: { left: "100vw" }, show: { left: "0" },
      onShow: function() { heSectionManager.showAll(); },
      onHide: function() { heSectionManager.hideAll(); }
   }),
  new Section("section#un-whdt-more", { duration: 1000,
      show : { zIndex: 1000, opacity: 1 }, hide: {zIndex: 300, opacity: 0 } }),
  new Section("section#un-he-more", { duration: 1000,
      show : { zIndex: 1000, opacity: 1 }, hide: {zIndex: 300, opacity: 0 } } )

]);


var popupArray = [];
// $.ajax({
//       url: 'https://sheetsu.com/apis/8d5a8d76',
//       async: false,
//       dataType: 'json',
//       success: function(d) {
//         console.log(d);

  //Process data
  (function(d) {
        d.result.forEach(function(item) {
          popupArray.push(new Popup(item.id, item, {onClose: NavControl.clearPopup}));

          //For flipbook
          popupArray.push(new Popup("flipbook-" + item.id,
            {
              image: "",
              downloadLink: item.downloadLink,
              fbLink: item.fbLink,
              twLink: item.twLink,
              className: 'flipbook-item',
              content: "<iframe frameborder='0' data-iframe-src='" + item.flipbookLink + "'></iframe>",
              closeText: "close"
            },
            {onClose: NavControl.clearPopup,
              onOpen: function(target, event) {
                var $iframe = $(target).find("iframe[data-iframe-src]");
                $iframe.attr("src", $iframe.data().iframeSrc);
              }
            }));
        });
    }(window.ALLDATA));

    (function(arr) {
      arr.forEach(function(item) { popupArray.push(new Popup("flipbook-more-" + item.id,
          {
            className: 'flipbook-item he-more',
            content: "<iframe frameborder='0' data-iframe-src='" + item.flipbookLink + "'></iframe>",
            closeText: "close"
          },
          {onClose: NavControl.clearPopup,
            onOpen: function(target, event) {
              var $iframe = $(target).find("iframe[data-iframe-src]");
              $iframe.attr("src", $iframe.data().iframeSrc);
            }
          }));
      });
    })(window.ALLPOPUP);
  //     }
  // });

var popups = PopupManager(popupArray);


(function($) {
  /* Initial state */
  // var sections = [
  //   new Section("section#un-home"),
  //   new section("section#un-whdt"),
  //   new section("section#un-he")
  // ];
  $("#un-he-whdt").on("submit", function() {
    var p = $("#un-he-whdt").serialize();
    window.location.hash = p;

    // console.log(p);

    return false;
  });
  $(".pop-change").on("click", function() {
    var target = $(this).data().target;
    $("#un-he-whdt input[name=t]").val(target);
    $("#un-he-whdt").submit();
  });

  $(".facebook-share-button").on("click", function() {
    var data = $(this).data();

    // var u = data.fb;
    // console.log(data);
    var u = data.fb;
    var t = data.title;
    var leftPosition, topPosition, width=500, height=300;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);

var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";

        window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
  });

  var win;
  $(".twitter-share-button").on("click", function() {
    if (win)
    {
      win.close();
    }
    var data = $(this).data();

    var show_text = data.tweet;
    var link = data.twlink;
    // console.log(data);
    var param = $.param({
      url: link,
      via: "unocha",
      hashtags: "Humanity360",
      text: show_text
    });

    win = window.open("https://twitter.com/intent/tweet?" + param, "twitter", "height=300,width=600,modal=yes,alwaysRaised=yes");
    win.focus();
  });

  //   function fbShare(url, title, descr, image, winWidth, winHeight) {
  //       var winTop = (screen.height / 2) - (winHeight / 2);
  //       var winLeft = (screen.width / 2) - (winWidth / 2);
  //       window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
  //   }


  $(window).on("hashchange", function() {
    var _hash = window.location.hash.substr(1);

    var target = $.deparam(_hash);

    if (target.p) {
      var page = "section#" + target.p;
      sectionManager.show(page);
    } else {
      var page = "section#un-home";
      sectionManager.show(page);
    }

    //Popup
    if (target.t || target.t == "") {
      popups.show(target.t);
    } else {
      popups.hide();
    }

    // console.log(target);
    //Reset values
    $("#un-he-whdt input[name=p]").val(target.p);
    $("#un-he-whdt input[name=t]").val(target.t);

  });

  /*initialize...*/
  var initialize = function() {
    var _hash = window.location.hash.substr(1);
    var target = $.deparam(_hash);

    $.extend(original, target);
    // console.log(target);
    $("#un-he-whdt input[name=p]").val(target.p);
    $("#un-he-whdt input[name=t]").val(target.t);
  };

  $(window).trigger("hashchange");
})(jQuery);
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1514256778903987',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1433955-15', 'auto');
  ga('send', 'pageview');

</script>
