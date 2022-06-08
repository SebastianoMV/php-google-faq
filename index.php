<?php

$db = [
  [
    "title" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",

    "paragraph" => "<p>The recent <span class='textblue'> ruling by the Court of Justice of the European Union </span> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.</p>

    Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information."
  ],
  [
    "title" => "How does Google protect my privacy and keep my information secure?",

    "paragraph" => "<p>We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</p>

    <p>We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</p> 

    <p>You can learn more about safety and security online, including how to protect yourself and your family online, at the <span class='textblue'> Google Safety Center. </span></p>

    <span class='textblue'>Learn more </span> about how we keep your personal information private and safe — and put you in control."
  ],
  [
    "title" => "Why is my account associated with a country?",

    "paragraph" => "<p>Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:</p>
    <ol><li>The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
    <ol type='a'><li>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland</li>
    <li>Google LLC, based in the United States, for the rest of the world</li></ol>
    <li>The version of the terms that govern our relationship, which can vary depending on local laws</li></ol>
    <p>Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.</p>"
  ],
  [
    "title" => "Determining the country associated with your account",

    "paragraph" => "<p>When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.</p>

    <p>Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.</p>
    
    <p>If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think your country association is wrong.</p>"
  ],
  [
    "title" => "How can I remove information about myself from Google's search results?",

    "paragraph" => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <span class='textblue'>contact the webmaster</span> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <span class='textblue'>click here.</span> Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <span class='textblue'>visit our help page for more information.</span"
  ],
  [
    "title" => "Are my search queries sent to websites when I click on Google Search results?",

    "paragraph" => "In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the <span class='textblue'>Referrer URL.</span> The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found <span class='textblue'>here.</span> Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click."
  ],


]

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="d-flex justify-content-between m-3 ">
     <div>google</div>
     <div>immagine</div>
    </div>
    <div class="d-flex justify-content-between mx-3 ">
     <ul class="d-flex">
       <li>Overview</li>
       <li>Privacy Policy</li>
       <li>Terms of Service</li>
       <li>Technologies</li>
       <li>FAQ</li>

     </ul>
    </div>
  </header>

  <main>
    <div class="container">
      <?php foreach($db as $faq): ?>
        <h3>
          <?php echo $faq['title'] ?>
        </h3>
        <p>
          <?php echo $faq['paragraph'] ?>
        </p>
      <?php endforeach; ?>
    </div>

  </main>
  
  <footer>

  </footer>
</body>
</html>