<div class="slider">
  <div class="slides">
    <img src="img/eceOffice.jpeg" alt="Image 1">
    <img src="img/ece22Cover.jpeg" alt="Image 2">
    <img src="img/ecePhoto.jpeg" alt="Image 3">
  </div>
</div>

<style>
    .slider {
  width: 100%;
  max-width: 800px;
  height: 400px;
  overflow: hidden;
  margin: 20px auto;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
  z-index: 1000;
}

.slides {
  display: flex;
  width: 300%;
  height: 100%;
  animation: slide 7s infinite;
}

.slides img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@keyframes slide {
  0%   { transform: translateX(0); }
  33%  { transform: translateX(0); }
  36%  { transform: translateX(-100%); }
  66%  { transform: translateX(-100%); }
  69%  { transform: translateX(-200%); }
  99%  { transform: translateX(-200%); }
  100% { transform: translateX(0); }
}
</style>