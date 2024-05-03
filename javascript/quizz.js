const quizContainer = document.getElementById("quiz");
const resultsContainer = document.getElementById("results");
const timeContainer = document.getElementById("time");
const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");

const myQuestions = [
  {
    question: "¿Qué significa HTML?",
    answers: {
      a: "Hyper Text Markup Language",
      b: "Hyperlinks and Text Markup Language",
      c: "Home Tool Markup Language",
    },
    correctAnswer: "a",
  },
  {
    question: "¿Cuál es la etiqueta correcta para una línea de salto?",
    answers: {
      a: "br",
      b: "break",
      c: "lb",
    },
    correctAnswer: "a",
  },
  {
    question: "¿Qué significa CSS?",
    answers: {
      a: "Cascading Style Sheets",
      b: "Computer Style Sheets",
      c: "Colorful Style Sheets",
    },
    correctAnswer: "a",
  },
  {
    question: "¿Cómo se selecciona un elemento con id 'demo' en JavaScript?",
    answers: {
      a: "document.getElementById('demo')",
      b: "document.querySelector('#demo')",
      c: "Ambas son correctas",
    },
    correctAnswer: "c",
  },
  {
    question: "¿Qué significa HTTP?",
    answers: {
      a: "Hyper Text Transfer Protocol",
      b: "Hyper Transfer Text Protocol",
      c: "Hyper Text Technology Protocol",
    },
    correctAnswer: "a",
  },
  {
    question: "¿Qué es jQuery?",
    answers: {
      a: "Un framework de JavaScript",
      b: "Una librería de JavaScript",
      c: "Un lenguaje de programación",
    },
    correctAnswer: "b",
  },
  {
    question: "¿Qué es Bootstrap?",
    answers: {
      a: "Un lenguaje de programación",
      b: "Un framework de CSS",
      c: "Un editor de texto",
    },
    correctAnswer: "b",
  },
  {
    question: "¿Cómo se declara una variable en JavaScript?",
    answers: {
      a: "var nombreVariable",
      b: "nombreVariable = var",
      c: "nombreVariable var",
    },
    correctAnswer: "a",
  },
  {
    question: "¿Cómo se crea una función en JavaScript?",
    answers: {
      a: "function miFuncion() {}",
      b: "miFuncion.function() {}",
      c: "miFuncion = function {}",
    },
    correctAnswer: "a",
  },
  {
    question:
      "¿Cómo se añade un evento click a un botón con id 'miBoton' en JavaScript?",
    answers: {
      a: "document.getElementById('miBoton').click(function() {})",
      b: "document.getElementById('miBoton').onclick = function() {}",
      c: "Ambas son correctas",
    },
    correctAnswer: "c",
  },
];

let currentQuestionIndex = 0;
let timeLeft = 300; // 5 minutos en segundos
let userAnswers = new Array(myQuestions.length).fill(null);

function showQuestion(questionIndex, questions, quizContainer) {
  let question = questions[questionIndex];
  let answers = [];
  for (letter in question.answers) {
    answers.push(
      "<label>" +
        '<input type="radio" name="question' +
        questionIndex +
        '" value="' +
        letter +
        '"' +
        (userAnswers[questionIndex] === letter ? " checked" : "") +
        ">" +
        letter +
        ": " +
        question.answers[letter] +
        "</label>"
    );
  }
  quizContainer.innerHTML =
    '<div class="question">' +
    question.question +
    "</div>" +
    '<div class="answers">' +
    answers.join("") +
    "</div>";
}

function nextQuestion() {
  let answerContainers = quizContainer.querySelector(".answers");
  let userAnswer = (
    answerContainers.querySelector(
      "input[name=question" + currentQuestionIndex + "]:checked"
    ) || {}
  ).value;
  userAnswers[currentQuestionIndex] = userAnswer;
  currentQuestionIndex++;
  if (currentQuestionIndex < myQuestions.length) {
    showQuestion(currentQuestionIndex, myQuestions, quizContainer);
    prevButton.disabled = false;
    if (currentQuestionIndex === myQuestions.length - 1) {
      nextButton.textContent = "Enviar";
    }
  } else {
    let numCorrect = 0;
    for (let i = 0; i < myQuestions.length; i++) {
      if (userAnswers[i] === myQuestions[i].correctAnswer) {
        numCorrect++;
      }
    }
    resultsContainer.innerHTML =
      "Aciertos : " + numCorrect + " de " + myQuestions.length;
    nextButton.disabled = true;
  }
}

function prevQuestion() {
  currentQuestionIndex--;
  showQuestion(currentQuestionIndex, myQuestions, quizContainer);
  nextButton.textContent =
    currentQuestionIndex === myQuestions.length - 1 ? "Enviar" : "Siguiente";
  if (currentQuestionIndex === 0) {
    prevButton.disabled = true;
  }
}

function updateTime() {
  let minutes = Math.floor(timeLeft / 60);
  let seconds = timeLeft % 60;
  timeContainer.innerHTML =
    "Tiempo restante: " +
    minutes.toString().padStart(2, "0") +
    ":" +
    seconds.toString().padStart(2, "0");
  timeLeft--;
  if (timeLeft < 0) {
    clearInterval(intervalId);
    quizContainer.innerHTML = "Tiempo agotado";
    resultsContainer.innerHTML = "Has fallado el quiz";
  }
}

showQuestion(currentQuestionIndex, myQuestions, quizContainer);
let intervalId = setInterval(updateTime, 1000);
