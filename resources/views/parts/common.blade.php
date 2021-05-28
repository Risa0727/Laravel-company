<!DOCTYPE html>
<html>
<head>
  @isset($title)
    <title>{{ $title }}ABC Company</title>
  @else
    <title>ABC Company</title>
  @endisset
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
