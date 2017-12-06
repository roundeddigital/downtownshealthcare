<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88265276-1"></script>
<script defer = "defer" type = "text/javascript">
window.onload = function() {

  /* ========================================================================================== */
  // Global Site Tag (gtag.js) - Google Analytics

  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments)
  };
  gtag('js', new Date());

  gtag('config', 'UA-88265276-1');


  /* ========================================================================================== */
  // Google Analytics
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-88265276-1', 'auto');

  // Google Event Tracking for Contact 7 Forms

  // contact-form-7 id="8" title="Appointment Request"
  // contact-form-7 id="56063" title="Career Interest"
  // contact-form-7 id="67290" title="Contest Giveaway"
  // contact-form-7 id="55955" title="General Contact"
  // contact-form-7 id="67153" title="Membership Interest Form"

  // Contact 7 Form Google Analytics Tracking
  document.addEventListener('wpcf7mailsent', function(event) {
    // console.log("Form 7 ID = ",event.detail.contactFormId);
    // ADD Contact 7 Form ID's and Google Analytics information here
    // contact_form_7_id, ga_form_category, ga_form_action, ga_form_label, ga_form_value
    // appointment, career, wellness, general, training
    var formIds = [
      [8, "Contact Form Submission", "submit", "appointment"],
      [67711, "Contact Form Submission", "submit", "appointment"],
      [56063, "Contact Form Submission", "submit", "career"],
      [66369, "Contact Form Submission", "submit", "wellness"],
      [55955, "Contact Form Submission", "submit", "general"],
      [66363, "Contact Form Submission", "submit", "training"]
    ];

    for (var i = 0; i < formIds.length; i++) {
      var formId = formIds[i][0];
      console.log("Each Form ID = ", formId);
      if (event.detail.contactFormId == formId) {
        var category = formIds[i][1];
        var action = formIds[i][2];
        var label = formIds[i][3];
        console.log("Google Analytics Category = ", category);
        console.log("Google Analytics Action = ", action);
        console.log("Google Analytics Label = ", label);
        ga('send', 'event', category, action, label);
      }
    }
  }, false);

  // Google Event Tracking for Telephone Numbers and Emails

  // Telephone Number (footer) | Telephone Number (body) | Telephone Number (menu) | Telephone Number (header)
  // Category: Telephone
  // Action: click
  // Label: footer | body | menu | header
  // Value: <empty>

  jQuery('.telephone-number-footer, h4').click(function() {
    console.log("Telephone Number Clicked (Footer)");
    return ga('send', 'event', 'Telephone', 'click', 'footer');
  });
  jQuery('.telephone-number-body').click(function() {
    console.log("Telephone Number Clicked (Body)");
    return ga('send', 'event', 'Telephone', 'click', 'body');
  });
  jQuery('.telephone-number-menu').click(function() {
    console.log("Telephone Number Clicked (Menu)");
    return ga('send', 'event', 'Telephone', 'click', 'menu');
  });
  jQuery('.telephone-number-header').click(function() {
    console.log("Telephone Number Clicked (Header)");
    return ga('send', 'event', 'Telephone', 'click', 'header');
  });

}
</script>
