@extends('layouts.user')

@section('css')
@endsection



@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Veltrix</span>
        </div>
    </nav>

    <div class="container" style="background-color:#DCDCDC; height:500px;">
        <h2 class="text-center ">Terms & Condition</h2>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">1. लोगिन करने
            के बाद अपना पासवर्ड बदल लें। </h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">2. प्रत्येक
            गेम के लिए 100/- Coins चार्ज और टेस्ट गेम में प्रतिदिन 100/- coins चार्ज रहेगा।</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">3. गेम रद्द
            होने या टाई होने पर मैच के सभी सौदे रद्द माने जायेंगे और जो सेशन पुरे हो चुके हे, उनके हिसाब से ही Coins कम
            या ज्यादा होंगे ।</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">4. मैच के
            दौरान भाव को देख व समझ के ही सौदा करे। किये गए किसी भी सौदे को हटाया या बदला नहीं जाएगा। सभी सौदे के लिए
            स्वयं आप ही जिम्मेदार होंगे।</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">5. मैच या सेशन
            भाव गलत चलने पर जो भी मैच या सेशन के सौदे हुए हे वह स्वतः हट जायेंगे।</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">6. मैच में जो
            सेशन कम्पलीट होंगे सिर्फ उनके हिसाब से कॉइन कम या ज्यादा होंगे और जो सेशन कम्पलीट नहीं हुए है बो सारे सेशन
            रद्द हो जाएंगे|</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">7. मैच मैं ओवर
            कम होने पर एडवांस सेसन फैंसी कैंसल हो जाएंगी|</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">8. मैच में ओवर
            कम होने पर अगर सेम टीम दुबारा खेलने के लिए आती है तो जो रनिंग में प्लेयर के रन और पार्टनरशीप डिक्लेयर होगी।
            अगर ओवर कम होने पर दूसरी टीम खेलने के लिए आती है तो जो रनिंग में प्लेयर रन, पार्टनरशीप रद्द हो जाएंगे|</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">9. प्लेयर के
            रिटायर्ड हर्ट या इंजर्ड होने पर प्लेयर के रन रद्द माने जाएंगे| अगर बो प्लेयर दुबारा खेलने के लिए आता है तो
            उसके रन डिक्लेअर कर दिए जायेंगे|</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">10. सेशन को
            डिक्लेअर और कैंसिल करने के लिए कंपनी का निर्णय अन्तिम होगा| ऐसी स्थिति में किसी भी तरह का वाद-विवाद मान्य
            नहीं होगा|</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">11. टेस्ट में
            पारी डिक्लेअर होने पर जो सेशन रनिंग में हे उस सेशन को डिक्लेअर करने के लिए दूसरी टीम के ओवर या बॉल काउंट
            किये जायेंगे|</h3>
        <h3 class="text-left " style="color:#000;font-family:Verdana, Geneva, sans-serif;font-size:16px;">नोट : सर्वर या
            वेबसाईट में किसी तरह की खराबी आने या बंद हो जाने पर केवल किये गए सौदे ही मान्य होंगे। ऐसी स्थिति में किसी भी
            तरह का वाद-विवाद मान्य नहीं होगा।</h3>
        <a href="userindex" class="text-decoration-none">
            <div class="button-items d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Accept & Proceed</button>
            </div>
        </a>



    </div>
    <!-- @include('layouts.footer')
    @include('layouts.footer-script') -->
</div>
@endsection



@section('script')
@endsection