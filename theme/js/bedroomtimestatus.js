let timerInterval;

function getCurrentTime() {
  const now = new Date();
  return {
    hour: now.getHours(),
    minute: now.getMinutes(),
  };
}

function parseTime(timeString) {
  const [hour, minute] = timeString.split(":").map(Number);
  return { hour, minute };
}

function checkStatus(timerId, startTime, endTime) {
  const currentTime = getCurrentTime();
  const currentMinutes = currentTime.hour * 60 + currentTime.minute;
  const startMinutes = startTime.hour * 60 + startTime.minute;
  const stopMinutes = endTime.hour * 60 + endTime.minute;

  const statusElement = document.getElementById(`status${timerId}`);

  if (startMinutes <= currentMinutes && currentMinutes < stopMinutes) {
    statusElement.classList.replace("status-off", "status-on");
  } else {
    statusElement.classList.replace("status-on", "status-off");
  }
}

function startTimers() {
  clearInterval(timerInterval);

  timerInterval = setInterval(() => {
    for (let i = 1; i <= 5; i++) {
      const start = parseTime(document.getElementById(`start${i}`).value);
      const end = parseTime(document.getElementById(`end${i}`).value);

      checkStatus(i, start, end);
    }
  }, 1000); // Check every second
}
