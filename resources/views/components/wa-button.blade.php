@php
  $phone = config('sakilah.whatsapp');
  if (substr($phone, 0, 1) == '0') {
        $waLink = '62' . substr($phone, 1);
    } else {
        $waLink = $phone;
    }
@endphp

<a href="https://wa.me/{{ $waLink }}"
  class="whatsapp-button" 
  target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>

<style>
.whatsapp-button {
  position: fixed;
  right: 60px;
  bottom: 40px;
  background-color: var(--color-accent);
  color: var(--color-black);
  font-size: 28px;
  width: 55px;
  height: 55px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  box-shadow: 0 2px 6px rgba(0,0,0,0.3);
  transition: background 0.3s;
  z-index: 999;
}
</style>