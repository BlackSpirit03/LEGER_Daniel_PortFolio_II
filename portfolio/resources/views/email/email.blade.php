<!-- Made or Customized by DLEGER -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    
    <h2>Merci d'avoir pris contact avec moi !</h2>
    <p>Rappel des informations de votre message du {{ $contact->created_at }} :</p>
    <ul>
    	<li>Votre nom : {{ $contact->name_contact }}</li>
    	<li>Votre entreprise : {{ $contact->company_contact }}</li>
    	<li>Votre numéro de téléphone : {{ $contact->phone_contact }}</li>
    	<li>Votre email : {{ $contact->email }}</li>
    	<li>Votre message : {{ $contact->message }}</li>
    </ul>

    @if ($contact->flag_urgent)
		<p>Votre message était marqué urgent, je reprend contact avec vous au plus vite.</p>
		@else
		<p>Je reprend contact avec vous dès que possible.</p>
	@endif

	<p>A très bientôt.</p>

	<p>Cordialement.</p><br>

	<p>Daniel LEGER</p>
    
  </body>

</html>