<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is Covid?</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/covinfo.css')}}">
    <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="{{url('/index2')}}"><img src="/image/HomePage LOGO.png"></a></div>
            <a href="{{url('/index2')}}" class="inactive">Home</a>
            <a href="{{url('/landproduk2')}}" class="inactive">See Covid Kits</a>
            <a href="{{url('/news2')}}" class="inactive">News</a>
            <a href="{{url('/about2')}}" class="inactive">About Us</a>
            <a href="{{url('/covinfo2')}}" class="inactive">What Is COVID-19?</a>
            <div class="humicon"> <a href="{{url('/profile')}}"><img src="{{asset('/image/simpan/'.Auth::user()->gambar)}}"></a></div>
        </section>

        <section class="content">
            <h1> Covid-19 ?</h1>
            <div class="image"> <img src="{{asset('/image/gambarcovinfo.png')}}" alt="">
            </div>
            <h2>Understanding Coronavirus</h2>
            <p1> Coronavirus or corona virus is a large family of viruses that cause mild to moderate upper respiratory
                tract infections, such as flu.
                Many people are infected with this virus, at least once in their life.
                However, some types of corona viruses can also cause more serious diseases, such as:</p1>
            <p2>
                >Middle East Respiratory Syndrome (MERS-CoV).
            </p2>
            <p2>
                >Severe Acute Respiratory Syndrome (SARS-CoV).
            </p2>
            <p2>
                >Pneumonia.
            </p2>
            <p1>SARS, which emerged in November 2002 in China, spread to several other countries.
                Starting from Hong Kong, Vietnam, Singapore, Indonesia, Malaysia, England, Italy, Sweden, Switzerland,
                Russia, to the United States.
                The SARS epidemic, which ended in mid-2003, infected 8,098 people in various countries.
                At least 774 people must have lost their lives due to this severe respiratory tract infection.
            </p1>
            <h2> Risk Factors for Coronavirus Infection</h2>
            <p1>Anyone can be infected with the corona virus. However, babies and young children, as well as people with
                weakened immunity,
                are more susceptible to attack by this virus. Apart from that, seasonal conditions may also have an
                effect. For example, in the United States,
                coronavirus infection is more common in autumn and winter. </p1>
            <p1>In addition, someone who lives in or visits an area or country that is prone to the corona virus ,
                is also at risk of contracting this disease. For example, visiting China, especially the city of Wuhan,
                which was once the COVID-19 outbreak which began in December 2019.</p1>
            <h2> Diagnosis of Coronavirus Infection </h2>
            <p1>To diagnose a corona virus infection , the doctor will start with a history taking or medical interview.
                Here the doctor will ask about the symptoms or complaints experienced by the patient.
                In addition, the doctor will also perform a physical examination and blood tests to help make a
                diagnosis.</p1>
            <p1>The doctor may also perform a sputum test, take a sample from the throat, or other breathing specimens.
                For cases of suspected novel coronavirus infection, the doctor will perform throat swabs,
                DPL, liver function, kidney function, and PCT / CRP.</p1>
            <h2> Complications of Coronavirus Infection </h2>
            <p1> The corona virus that causes SARS disease can cause complications of pneumonia and other severe
                respiratory problems if not treated quickly and appropriately. In addition,
                SARS can also cause respiratory failure, heart failure, liver failure and death.</p1>
            <p1>Similar to SARS, the novel coronavirus can also cause serious complications.
                This viral infection can cause pneumonia, acute respiratory syndrome, kidney failure and even death.
            </p1>
            <h2> Coronavirus Infection Treatment </h2>
            <p1>There is no special treatment to deal with corona virus infection. Generally, sufferers will recover on
                their own.
                However, there are several efforts that can be done to relieve symptoms of corona virus infection.
                Example: </p1>
            <p2>
                > Take over-the-counter medications to reduce pain, fever, and cough. However, do not give aspirin to
                children.
                Also, do not give cough medicines to children under four years of age.
            </p2>
            <p2>
                > Use a humidifier or take a hot shower to help relieve sore throats and coughs. </p2>
            <p2>
                > Much rest.
            </p2>
            <p2>
                > Increase your body fluid intake.
            </p2>
            <p2>
                > If you are worried about the symptoms you are experiencing, immediately contact the nearest health
                care
                provider.
            </p2>

            <p1>Especially for the corona virus that causes serious illness, such as SARS, MERS, or COVID-19 infection ,
                the handling will be adjusted to the disease and the patient's condition. </p1>
            <p1>If the patient has a novel coronavirus infection, the doctor will refer to a Referral Hospital that has
                been appointed by
                the local Health Office (Public Health Office).
                If you cannot be referred for several reasons, the doctor will: </p1>
            <p2> > Isolation</p2>
            <p2> > Chest X-ray as indicated.</p2>
            <p2> > Symptomatic therapy.</p2>
            <p2> > Fluid therapy. </p2>
            <p2> > Mechanical ventilator (if respiratory failure)</p2>
            <p2> > If there is accompanied by a bacterial infection, antibiotics can be given </p2>
            <h2>Coronavirus Infection Prevention </h2>
            <p1> Until now there is no vaccine to prevent corona virus infection . However, there are at least several
                ways you can do to reduce the risk of contracting this virus. The following efforts can be done:</p1>
            <p2> > Wash your hands frequently with soap and water for 20 seconds until they are clean.
            </p2>
            <p2> > Avoid touching your face, nose, or mouth when your hands are dirty or unwashed.
            </p2>
            <p2> > Avoid direct contact with or near people who are sick.
            </p2>
            <p2> > Avoid touching wild animals or birds.
            </p2>
            <p2> > Clean and sterilize frequently used surfaces. </p2>
            <p2> > Cover your nose and mouth when sneezing or coughing with a tissue. Then, throw away the tissue and wash your hands thoroughly. </p2>
            <p2> > Don't leave the house when sick.
            </p2>
            <p2> > Wear a mask and immediately seek treatment at a health facility when you experience symptoms of respiratory disease. </p2>
        </section>

        <section class="footer">
            <div class="connect">
                <label class="conus">Connect with Us</label><br>
                <a href="https://www.facebook.com/" class="iconconnect"><img src="{{ asset('/image/Facebook.png')}}" alt=""></a>
                <a href="https://www.instagram.com/" class="iconconnect"><img src="{{ asset('/image/instagram.png')}}" alt=""></a>
            </div>
            <div class="contact">
                <label class="contus">Contact us:</label><br>
                <div class="baris">
                    <img src="{{ asset('/image/wa.png')}}" alt=""><label class="rightfooter">+62 822-1780-2911</label>
                </div>
                <div class="baris">
                    <img src="{{ asset('/image/email.png')}}" alt=""><label class="rightfooter">covcare@gmail.com</label>
                </div>
            </div>
        </section>
    </div>
</body>

</html>