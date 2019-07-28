<div class="" id="bg-lk">
  @auth
  @include('components.cabinet_components.profile')
  @endauth

  @guest
    @include('components.cabinet_components.login')
  @endguest
</div>
