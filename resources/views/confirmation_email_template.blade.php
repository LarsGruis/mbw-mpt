<b>Naam:</b> {{ $data['firstname'] }} {{$data['lastname']}}
<br>
<b>Email:</b> {{ $data['email'] }}
<br>
<b>Telefoon:</b> {{$data['telephone_number']}}

<br>

<p>
<b>Aankomst</b> {{ Carbon\Carbon::parse($data['arrival'])->format('d-m-Y') }} om 11 uur <br>
<b>Vetrek</b> {{ Carbon\Carbon::parse($data['departure'])->format('d-m-Y') }} om 12 uur  <br>
<br>
  Bedankt voor het boeken van {{$data['chalet']}}.<br>
  U heeft geresveerd voor {{$data['people']}} personen.<br>
  De totaalprijs bedraagt {{$data['price']}}.
</p>
