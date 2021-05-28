 @include("parts.common", ["title"=>"About - "])
  @include("parts.header")
  <main>
    <h1>About Us</h1>
    <p>It is {{ $current_time }} now.</p>
  </main>
  @include("parts.footer")
</body>

</html>
