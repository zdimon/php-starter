const video = document.getElementById("videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices
    .getUserMedia({
      video: true,
    })
    .then((stream) => {
      video.srcObject = stream;
    })
    .catch((err0r) => {
      console.log("Something went wrong!");
    });
} else {
  console.log("No devices!");
}
