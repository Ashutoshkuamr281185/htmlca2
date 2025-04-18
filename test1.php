<?php
$questions = [
    [
        "question" => "Ravi ranks 12th from the top and 40th from the bottom in a class. How many students are there in the class?",
        "options" => ["48", "51", "52", "55"],
        "answer" => "B"
    ],
    [
        "question" => "In a row of ten girls, when Harini was shifted by two places towards the left, she became fourth from the left end. What was her earlier position from the left end?",
        "options" => ["2nd", "4th", "5th", "7th"],
        "answer" => "D"
    ],
    [
        "question" => "Three of the following four are alike in a certain way and so form a group. Which is the one that does not belong to that group? Needle, Hammer, Pin, Nail",
        "options" => ["Needle", "Hammer", "Pin", "Nail"],
        "answer" => "B"
    ],
    [
        "question" => "Three of the following four are alike in a certain way and so form a group. Which is the one that does not belong to that group? Joy, Anger, Sorrow, Feeling",
        "options" => ["Joy", "Anger", "Sorrow", "Feeling"],
        "answer" => "D"
    ],
    [
        "question" => "Three of the following four are alike in a certain way and so form a group. Which is the one that does not belong to that group? Mustard, Rice, Wheat, Bajra",
        "options" => ["Mustard", "Rice", "Wheat", "Bajra"],
        "answer" => "A"
    ],
    [
        "question" => "Three of the following four are alike in a certain way and so form a group. Which is the one that does not belong to that group? Kerala, Maharashtra, West Bengal, Uttar Pradesh",
        "options" => ["Kerala", "Maharashtra", "West Bengal", "Uttar Pradesh"],
        "answer" => "D"
    ],
    [
        "question" => "Three of the following four are alike in a certain way and so form a group. Which is the one that does not belong to that group? Dolphin, Crocodile, Lion, Tiger",
        "options" => ["Dolphin", "Crocodile", "Lion", "Tiger"],
        "answer" => "B"
    ],
    [
        "question" => "Statements: 1. The rise in foreign investments is increasing the value of rupee. 2. Foreign banks are establishing branches and ameliorating investment plans in South Asia, especially in India. Conclusions: 1. Both the statement I and II are independent causes. 2. Both the statement I and II are effects of independent causes. 3. The statement I is the cause and statement II is its effect. 4. Statement II is the cause and statement I is its effect.",
        "options" => ["A", "B", "C", "D"],
        "answer" => "D"
    ],
    [
        "question" => "Energy: Joule:: Force:?",
        "options" => ["Second", "Kilogram", "Newton", "Pascal"],
        "answer" => "C"
    ],
    [
        "question" => "Waves: Air:: Ripples:?",
        "options" => ["Light", "Wind", "Sound", "Water"],
        "answer" => "D"
    ],
    [
        "question" => "Footwear: Leather:: Apparel:?",
        "options" => ["Pant", "Cloth", "Jeans", "Shirt"],
        "answer" => "B"
    ],
    [
        "question" => "Software: Auto-Cad::? : Keyboard",
        "options" => ["Graphics", "Windows", "Driver", "Hardware"],
        "answer" => "D"
    ],
    [
        "question" => "Computer: CPU:: Human:?",
        "options" => ["Lung", "Stomach", "Heart", "Intestine"],
        "answer" => "C"
    ],
    [
        "question" => "A man 5'11\" high is found dead in a closed room. This room is found empty with some puddle of water. The man was died by hanging himself to a 12 feet high fan. How did the man die?",
        "options" => ["He stood on a chair to hang himself", "He jumped from the fan", "He was pushed by someone", "He used a rope to hang himself"],
        "answer" => "A"
    ],
    [
        "question" => "We have two buckets of 3 liter and 5 liter. Assuming there is an infinite supply of water, how can I measure 1 liter of water?",
        "options" => ["Fill the 3-liter bucket and pour it into the 5-liter bucket", "Fill the 5-liter bucket and pour it into the 3-liter bucket", "Fill the 3-liter bucket, then pour it into the 5-liter bucket", "Fill the 5-liter bucket, then pour it into the 3-liter bucket"],
        "answer" => "A"
    ],
    [
        "question" => "There are many instances in a day when the minute needle and hour needle of a clock come in a straight line. How many times does this occur?",
        "options" => ["22", "24", "26", "48"],
        "answer" => "A"
    ],
    [
        "question" => "If two painters can complete painting of two rooms in two hours, how many painters would be needed to paint eighteen rooms in six hours?",
        "options" => ["3", "4", "5", "6"],
        "answer" => "A"
    ],
    [
        "question" => "Arrange the following words in a meaningful sequence: 1. Infection 2. Consultation 3. Doctor 4. Treatment 5. Recovery",
        "options" => ["1, 3, 4, 5, 2", "1, 3, 2, 4, 5", "1, 2, 3, 4, 5", "2, 3, 5, 1, 4"],
        "answer" => "B"
    ],
    [
        "question" => "Peter is in the East of Tom and Tom is in the North of John. Mike is in the South of John. Then in which direction of Peter is Mike?",
        "options" => ["South-East", "South-West", "South", "North-East"],
        "answer" => "B"
    ],
    [
        "question" => "Which of the following diagrams correctly represents lions, elephants, and animals?",
        "options" => ["Venn Diagram A", "Venn Diagram B", "Venn Diagram C", "Venn Diagram D"],
        "answer" => "A"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BrainBoost IQ Test</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 15px 30px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    header .logo {
      font-weight: bold;
      font-size: 20px;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .question-box {
      margin-bottom: 20px;
    }
    .question-category {
      font-size: 14px;
      color: #6366f1;
      font-weight: bold;
    }
    .question-text {
      font-size: 18px;
      font-weight: bold;
      margin: 10px 0;
    }
    .options button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #f3f4f6;
      cursor: pointer;
    }
    .navigation {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
    }
    .navigation button {
      background-color: #6366f1;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
    .timer-score {
      text-align: right;
      margin-bottom: 10px;
    }
    .scorecard {
      text-align: center;
      font-size: 22px;
      font-weight: bold;
      margin-top: 20px;
    }
    .close-btn {
      margin: 10px 10px 0 10px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #6366f1;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <i class='bx bxs-brain'></i> BrainBoost IQ
    </div>
    <div class="timer-score">
      <span id="timer">Time Left: 20:00</span> |
      <span id="score">Score: 0</span>
    </div>
  </header>

  <div class="container">
    <div id="quiz-box"></div>
    <div class="navigation">
      <button id="next-btn" onclick="nextQuestion()">Next →</button>
      <button id="submit-btn" onclick="showScore()" style="display:none;">FNISH</button>
    </div>
    <div class="scorecard" id="scorecard"></div>
  </div>

  <script>
    const questions = <?php echo json_encode($questions); ?>;
    let current = 0;
    let score = 0;
    let selectedAnswers = new Array(questions.length);
    let time = 1200; // 20 minutes
    let timerInterval;

    function loadQuestion(index) {
      const q = questions[index];
      document.getElementById("quiz-box").innerHTML = `
        <div class="question-box">
          <div class="question-category">IQ Question</div>
          <div class="question-text">${index + 1}. ${q.question}</div>
          <div class="options">
            ${q.options.map((opt, i) => `
              <button onclick="selectOption('${String.fromCharCode(65 + i)}', this)">
                ${String.fromCharCode(65 + i)}) ${opt}
              </button>`).join('')}
          </div>
        </div>`;

      // Toggle buttons
      if (index === questions.length - 1) {
        document.getElementById("next-btn").style.display = 'none';
        document.getElementById("submit-btn").style.display = 'inline-block';
      } else {
        document.getElementById("next-btn").style.display = 'inline-block';
        document.getElementById("submit-btn").style.display = 'none';
      }
    }

    function selectOption(answer, btn) {
      selectedAnswers[current] = answer;
      document.querySelectorAll(".options button").forEach(b => {
        b.style.backgroundColor = '#f3f4f6';
      });
      btn.style.backgroundColor = '#a5b4fc';
    }

    function nextQuestion() {
      if (current < questions.length - 1) {
        current++;
        loadQuestion(current);
      }
    }

    function showScore() {
      questions.forEach((q, i) => {
        if (selectedAnswers[i] === q.answer) score++;
      });
      clearInterval(timerInterval);
      document.getElementById("quiz-box").style.display = 'none';
      document.querySelector(".navigation").style.display = 'none';
      document.getElementById("score").innerText = `Score: ${score}`;
      const timeTaken = formatTime(1200 - time);
      document.getElementById("scorecard").innerHTML = `
        You scored ${score} out of ${questions.length}<br>
        Time Taken: ${timeTaken}<br>
        <button class='close-btn' onclick='restartQuiz()'>Test Again</button>
        <button class='close-btn'><a href="secondpage.php" style="color:white; text-decoration: none;">Close</a></button>`;
    }

    function restartQuiz() {
      current = 0;
      score = 0;
      time = 1200;
      selectedAnswers = new Array(questions.length);
      document.getElementById("quiz-box").style.display = 'block';
      document.querySelector(".navigation").style.display = 'flex';
      document.getElementById("scorecard").innerHTML = '';
      loadQuestion(current);
      startTimer();
    }

    function startTimer() {
      clearInterval(timerInterval);
      timerInterval = setInterval(() => {
        if (time > 0) {
          time--;
          document.getElementById("timer").innerText = `Time Left: ${formatTime(time)}`;
        } else {
          showScore();
        }
      }, 1000);
    }

    function formatTime(seconds) {
      const mins = String(Math.floor(seconds / 60)).padStart(2, '0');
      const secs = String(seconds % 60).padStart(2, '0');
      return `${mins}:${secs}`;
    }

    loadQuestion(current);
    startTimer();
  </script>
</body>
</html>
