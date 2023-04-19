const uploadBtn = document.getElementById('upload-btn');
const playBtn = document.getElementById('play-btn');
const video = document.getElementById('my-video');

uploadBtn.addEventListener('click', () => {
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'video/*';
  input.addEventListener('change', () => {
    const file = input.files[0];
    const fileURL = URL.createObjectURL(file);
    video.src = fileURL;
  });
  input.click();
});

playBtn.addEventListener('click', () => {
  if (video.paused) {
    video.play();
    playBtn.innerText = 'Pause';
  } else {
    video.pause();
    playBtn.innerText = 'Play';
  }
});
