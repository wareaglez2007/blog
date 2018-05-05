<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
@foreach($names as $v => $name)
<li>Name: {{$v}}
<ol>
	<li>Age: {{$name['Age']}} @if($name['Age'] >= (int)30) olds @else  old @endif</li>
</ol>
</li>

<li>Date of birth: {{$name['DOB']}}</li>
<li>Address: {{$name['Address']}}</li>
<li>City: {{$name['City']}}</li>
<li>State: {{$name['State']}}</li>
<li>Postal Code: {{$name['Zip']}}</li>
<li>Phone#: {{$name['phone']}}</li>
@endforeach
</ul>
<!-asasas-!>

</body>
</html>



