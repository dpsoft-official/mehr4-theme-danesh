<?php

namespace Dpsoft\Mehr4ThemeDanesh;

use Dpsoft\Mehr\Models\Setting;
use Illuminate\Console\Command;


class InstallThemeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mehr4-theme-danesh:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install mehr4 theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

//        $this->info('copy theme directory...');
//        $this->call('vendor:publish',['--provider'=>Mehr4ThemedaneshServiceProvider::class,'--tag'=>'theme','--force' => true]);



        $this->info('Publishing assets...');
        $this->call('vendor:publish',['--provider'=>Mehr4ThemeDaneshServiceProvider::class,'--tag'=>'assets','--force' => true]);
//        $this->info('Publishing page404...');
//        $this->call('vendor:publish',['--provider'=>Mehr4ThemedaneshServiceProvider::class,'--tag'=>'page404','--force' => true]);
//        $this->info('Publishing auth pages view...');
//        $this->call('vendor:publish',['--tag'=>'mehr-theme-danesh-auth-views']);
//        $this->info('Creating new settings...');
//        \Mehr::updateOrNewSetting('background.footer',\Storage::url('theme/footer-background.png'),'تصویر بک گراند فوتر');
//        \Mehr::updateOrNewSetting('slider1',\Storage::url('theme/slider1.jpeg'),'تصویر اسلایدر ۱');
//        \Mehr::updateOrNewSetting('slider2',\Storage::url('theme/slider2.jpeg'),'تصویر اسلایدر ۲');
//        \Mehr::updateOrNewSetting('slider3',\Storage::url('theme/slider3.jpeg'),'تصویر اسلایدر ۳');
//        \Mehr::updateOrNewSetting('slider4',\Storage::url('theme/slider4.jpeg'),'تصویر اسلایدر ۴');
//        \Mehr::updateOrNewSetting('site.logo',\Storage::url('theme/logo.png'),'آدرس لوگو');
//        \Mehr::updateOrNewSetting('site.aboutimg',\Storage::url('theme/about-home.png'),'آدرس تصویر درباره ما صفحه اول');
//        \Mehr::updateOrNewSetting('site.moshavere1',\Storage::url('theme/contact-home1.png'),'تصویر اول مشاوره رایگان');
//        \Mehr::updateOrNewSetting('site.moshavere2',\Storage::url('theme/contact-home2.png'),'تصویر دوم مشاوره رایگان');
//        \Mehr::updateOrNewSetting('site.icon1',\Storage::url('theme/icon5.png'),'تصویر آیکن  شمارنده 1 صفحه اول');
//        \Mehr::updateOrNewSetting('site.icon2',\Storage::url('theme/icon6.png'),'تصویر آیکن  شمارنده 2 صفحه اول');
//        \Mehr::updateOrNewSetting('site.icon3',\Storage::url('theme/icon7.png'),'تصویر آیکن  شمارنده 3 صفحه اول');
//        \Mehr::updateOrNewSetting('site.icon4',\Storage::url('theme/icon8.png'),'تصویر آیکن  شمارنده 4 صفحه اول');
//        \Mehr::updateOrNewSetting('customer1',\Storage::url('theme/customer1.png'),'تصویر مشتری 1');
//        \Mehr::updateOrNewSetting('customer2',\Storage::url('theme/customer2.png'),'تصویر مشتری 2');
//        \Mehr::updateOrNewSetting('customer3',\Storage::url('theme/customer3.png'),'تصویر مشتری 3');
//        \Mehr::updateOrNewSetting('customer4',\Storage::url('theme/customer4.png'),'تصویر مشتری 4');
//        \Mehr::updateOrNewSetting('customer5',\Storage::url('theme/customer5.png'),'تصویر مشتری 5');
//        \Mehr::updateOrNewSetting('customer6',\Storage::url('theme/customer6.png'),'تصویر مشتری 6');
//        \Mehr::updateOrNewSetting('customer7',\Storage::url('theme/customer7.png'),'تصویر مشتری 7');
//        \Mehr::updateOrNewSetting('customer8',\Storage::url('theme/customer8.png'),'تصویر مشتری 8');
//        \Mehr::updateOrNewSetting('customer9',\Storage::url('theme/customer9.png'),'تصویر مشتری 9');
//        \Mehr::updateOrNewSetting('customer10',\Storage::url('theme/customer10.png'),'تصویر مشتری 10');
//        \Mehr::updateOrNewSetting('customer11',\Storage::url('theme/customer11.png'),'تصویر مشتری 11');
//        \Mehr::updateOrNewSetting('customer12',\Storage::url('theme/customer12.png'),'تصویر مشتری 12');
//        \Mehr::updateOrNewSetting('logofooter',\Storage::url('theme/logo-footer.png'),'آدرس لوگوی فوتر');
//        \Mehr::updateOrNewSetting('aboutimg',\Storage::url('theme/about.png'),'آدرس تصویر درباره ما');
//        \Mehr::updateOrNewSetting('team1image',\Storage::url('theme/team1.png'),'آدرس تصویر 1 تیم ما');
//        \Mehr::updateOrNewSetting('team2image',\Storage::url('theme/team2.png'),'آدرس تصویر ۲ تیم ما');
//        \Mehr::updateOrNewSetting('team3image',\Storage::url('theme/team3.png'),'آدرس تصویر ۳ تیم ما');
//        \Mehr::updateOrNewSetting('team4image',\Storage::url('theme/team4.png'),'آدرس تصویر ۴ تیم ما');
//        \Mehr::updateOrNewSetting('contactimage',\Storage::url('theme/contact.jpg'),'آدرس تصویر تماس باما');
//        \Mehr::updateOrNewSetting('headercontact',\Storage::url('theme/header-contact.png'),'آدرس  هدر تصویر تماس باما');
//        \Mehr::updateOrNewSetting('headerpageimage',\Storage::url('theme/header-page.png'),'آدرس  هدر تصویر صفحات');
//        \Mehr::updateOrNewSetting('blogpageimage',\Storage::url('theme/blog-page.png'),'آدرس  هدر تصویر بلاگ');
//        \Mehr::updateOrNewSetting('postimage',\Storage::url('theme/post.jpg'),'آدرس  هدر تصویر پست');
//        \Mehr::updateOrNewSetting('comimage',\Storage::url('theme/com.png'),'آدرس  آیکن نظرات در صفحه دوره ها');
//        \Mehr::updateOrNewSetting('headerabout',\Storage::url('theme/header-about.png'),'آدرس  هدر تصویر  درباره ما ');
//        \Mehr::updateOrNewSetting('coursepage',\Storage::url('theme/course-page.png'),'آدرس  هدر تصویر   دوره ها ');

//        \Mehr::updateOrNewSetting('slider.title1',' برهان، انتخاب مدیران','شعار اول اسلایدر');
//        \Mehr::updateOrNewSetting('slider.title2','آموزش حرفه ای=آینده کسب و کار روشن','شعار دوم اسلایدر');
//        \Mehr::updateOrNewSetting('icon1.title','اساتید مجرب',' عنوان آیکن اول زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon1.text','همکاری با اساتید و مدرسین برتر هر دوره','متن آیکن اول زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon2.title','مدرک معتبر',' عنوان آیکن دوم زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon2.text','اعطای گواهینماه معتبر و مورد تایید وزارت علوم و تحقیقات فناوری','متن آیکن دوم زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon3.title','برگزاری دوره های کاربردی','آیکن سوم زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon3.text','برگذاری دوره های مهارتی و کاملا کاربردی متناسب با نیاز بازار کار','متن آیکن سوم زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon4.title','تنوع در نحوه برگزاری','آیکن چهارم زیر اسلایدر');
//        \Mehr::updateOrNewSetting('icon4.text','برگذاری دوره های متنوع به صورت حضوری و آنلاین','متن آیکن سوم زیر اسلایدر');
//
//        \Mehr::updateOrNewSetting('about-homepage','سپاس خداوند متعال را که توانسته ایم از آغاز فعالیتمان پذیرای هموطنان میهن عزیزمان ایران در حوزه های مدیریتی ، مالی و حقوقی به صورت حضوری و نیمه حضوری باشیم. خداوند را شاکریم که توانسته ایم آموزشهای مهارتی را در کنار تحصیلات دانشگاهی به دانشپذیران عزیز ، سازمان های دولتی و شرکت های خصوصی در راستای ارتقاء شغلی ،راه اندازی و یا بهبود کسب و کار ،افزایش درآمد و افزایش تعداد مشتریانشان و ... ارائه نموده و گام هایی طلایی را در راستای ارتقاء کشور عزیزمان برداریم','درباره ما صفحه اصلی');
//        \Mehr::updateOrNewSetting('depart.text',' قبل از رسیدن به هر موفقیتی ، بایداصول رسیدن به اون را یاد گرفت ، ما به شما این اصول و تکنیک ها رو یاد میدیم.','متن دپارتمان ها در صفحه اصلی');
//        \Mehr::updateOrNewSetting('home-mosh',' یک مشاوره رایگان مهمان ماباشید','متن قسمت مشاوره در صفحه اصلی');
//        \Mehr::updateOrNewSetting('number-counter-1','152',' شمارنده 1');
//        \Mehr::updateOrNewSetting('about-counter-1-text','دوره های در حال اجرا','متن شمارنده 1');
//        \Mehr::updateOrNewSetting('number-counter-2','140',' شمارنده 2');
//        \Mehr::updateOrNewSetting('about-counter-2-text','دوره های برگزار شده',' شمارنده 2 متن');
//        \Mehr::updateOrNewSetting('number-counter-3','125',' شمارنده 3');
//        \Mehr::updateOrNewSetting('about-counter-3-text','فارغ التحصیلان','متن شمارنده 3');
//        \Mehr::updateOrNewSetting('number-counter-4','555',' شمارنده 4');
//        \Mehr::updateOrNewSetting('about-counter-4-text','دانش پذیران',' شمارنده 4 متن');
//        \Mehr::updateOrNewSetting('adv-homepage','چگونه مدیر موفقی باشیم؟',' بخش تبلیغاتی صفحه اول');
//        \Mehr::updateOrNewSetting('about-homepage-footer','سپاس خداوند متعال را که توانسته ایم از آغاز فعالیتمان پذیرای هموطنان میهن عزیزمان ایران در حوزه های مدیریتی ، مالی و حقوقی به صورت حضوری و نیمه حضوری باشیم. خداوند را شاکریم که توانسته ایم آموزشهای مهارتی را در کنار تحصیلات دانشگاهی به دانشپذیران عزیز ، سازمان های دولتی و شرکت های خصوصی در راستای ارتقاء شغلی ارائه نموده',' متن درباره ما فوتر');
////        \Mehr::updateOrNewSetting('course.content1','پشتیبانی تلفنی','عنوان اول صفحه خرید دوره');
////        \Mehr::updateOrNewSetting('course.content2','پشتیبانی تلفنی','عنوان اول صفحه خرید دوره');
////        \Mehr::updateOrNewSetting('course.content3','ارتباط با استاد','عنوان سوم صفحه خرید دوره');
//        \Mehr::updateOrNewSetting('count-course1','12','تعداد دوره مدیریت در ص اول');
//        \Mehr::updateOrNewSetting('count-course2','12','تعداد دوره بورس در ص اول');
//        \Mehr::updateOrNewSetting('title-course1','مدیریت','نام دوره اول در ص اول');
//        \Mehr::updateOrNewSetting('link-course1','#','لینک دوره اول در ص اول');
//        \Mehr::updateOrNewSetting('link-course2','#','لینک دوره  دوم در ص اول');
//        \Mehr::updateOrNewSetting('title-course2','بورس و سرمایه گذاری','نام دوره در ص دوم');
//        \Mehr::updateOrNewSetting('team','','فعال بودن قسمت تیم');
//        \Mehr::updateOrNewSetting('team1','مارال رضایی','نام تیم ما1');
//        \Mehr::updateOrNewSetting('team2','مهران احمدی','نام تیم ما2');
//        \Mehr::updateOrNewSetting('team3','مارال رضایی','نام تیم ما3');
//        \Mehr::updateOrNewSetting('team4','مارال احمدی','نام تیم ما4');
//        \Mehr::updateOrNewSetting('team5','مینا احمدی','نام تیم ما5');
//        \Mehr::updateOrNewSetting('team1-job','حسابدار','شغل تیم ما1');
//        \Mehr::updateOrNewSetting('team2-job','طراح','شغل تیم ما2');
//        \Mehr::updateOrNewSetting('team3-job','فنی','شغل تیم ما31');
//        \Mehr::updateOrNewSetting('team4-job','طراح','شغل تیم ما4');
//        \Mehr::updateOrNewSetting('team5-job','گرافیست','شغل تیم ما5');
//        \Mehr::updateOrNewSetting('team5-job','گرافیست','شغل تیم ما5');
//        \Mehr::updateOrNewSetting('paginate.count',6,'تعداد پست در یک صفحه ');
//          \Mehr::updateOrNewSetting('enamad.image','<a target="_blank" rel="origin" href="https://trustseal.enamad.ir/?id=184025&amp;Code=vavoVoUDyzfMjpaDZW6r"><img src="https://Trustseal.eNamad.ir/logo.aspx?id=184025&amp;Code=vavoVoUDyzfMjpaDZW6r" alt="" style="cursor:pointer" id="vavoVoUDyzfMjpaDZW6r"></a>');
//        \Mehr::updateOrNewSetting('iframegooglemap','
//          <iframe   src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3360.687895420706!2d51.6709!3d32.6145!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2389d621db7e6dce!2sBorhan%20Business%20School!5e0!3m2!1sen!2sus!4v1601899002490!5m2!1sen!2sus" width="100%" height="465"  frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
//              ','کد گوگل مپ ');
//        \Mehr::updateOrNewSetting('iframegooglemapfooter','
//          <iframe   src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3360.687895420706!2d51.6709!3d32.6145!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2389d621db7e6dce!2sBorhan%20Business%20School!5e0!3m2!1sen!2sus!4v1601899002490!5m2!1sen!2sus" width="100%" height="150"  frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
//              ','کد گوگل مپ ');
//        \Mehr::updateOrNewSetting('slider','true','فعال بودن قسمت اسلایدر');
//        \Mehr::updateOrNewSetting('whyus','true','فعال بودن قسمت چرا ما');
//        \Mehr::updateOrNewSetting('aboutus','true','فعال بودن قسمت درباره ما');
//        \Mehr::updateOrNewSetting('department','true','فعال بودن قسمت دپارتمان ها');
//        \Mehr::updateOrNewSetting('courses','true','فعال بودن قسمت  دوره های آموزشی');
//        \Mehr::updateOrNewSetting('department','true','فعال بودن قسمت  دوره های آموزشی');
//        \Mehr::updateOrNewSetting('lastblog','true','فعال بودن قسمت  آخرین مقالات');
//        \Mehr::updateOrNewSetting('moshavere','true','فعال بودن قسمت  مشاوره');
//        \Mehr::updateOrNewSetting('run-course','true','فعال بودن قسمت  دوره های در حال اجرا');
//        \Mehr::updateOrNewSetting('hamkaran','true','فعال بودن قسمت  دوره های در حال همکاران');
//        \Mehr::updateOrNewSetting('footer','true','فعال بودن قسمت فوتر');
//      \Mehr::updateOrNewSetting('footerimage',\Storage::url('theme/logovezarat.png'),'آدرس لوگوی وزارت علوم ');
//        \Mehr::updateOrNewSetting('site.about2','این متن دوم تست برای درباره ما می باشد',' متن دوم درباره سایت');
//        \Mehr::updateOrNewSetting('site.about3','این متن سوم تست برای درباره ما می باشد','متن سوم درباره سایت');
//        \Mehr::updateOrNewSetting('about.item1','این مورد اول تست برای درباره ما می باشد','مورد اول درباره سایت');
//        \Mehr::updateOrNewSetting('about.item2','این مورد دوم تست برای درباره ما می باشد','مورد دوم درباره سایت');
//        \Mehr::updateOrNewSetting('about.item3','این مورد سوم تست برای درباره ما می باشد','مورد سوم درباره سایت');
//        \Mehr::updateOrNewSetting('about.item4','این مورد چهارم تست برای درباره ما می باشد','مورد چهارم درباره سایت');
//        \Mehr::updateOrNewSetting('about.item5','این مورد پنجم تست برای درباره ما می باشد','مورد پنجم درباره سایت');
//        \Mehr::updateOrNewSetting('about.item6','این مورد ششم تست برای درباره ما می باشد','مورد ششم درباره سایت');
//        \Mehr::updateOrNewSetting('social.instagram2','آدرس صفحه','دومین صفحه اینستاگرام');
//        \Mehr::updateOrNewSetting('social.instagram3','آدرس صفحه','سومین صفحه اینستاگرام');
//        \Mehr::updateOrNewSetting('social.instagram4','آدرس صفحه','چهارمین صفحه اینستاگرام');
//        \Mehr::updateOrNewSetting('social.instagram5','آدرس صفحه','پنجمین صفحه اینستاگرام');

    }


//    public function addSetting(string $key,string $value,string $label): void
//    {
//        $setting = new Setting();
//        $setting->key = $key;
//        $setting->value = $value;
//        $setting->label = $label;
//        $setting->save();
//    }


}
