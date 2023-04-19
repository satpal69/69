function generateFibonacci() {
    // Get the max number of elements from the user input
    const maxNumber = document.getElementById("max-number").valueAsNumber;
  
    // Create an empty array to store the series
    let fibonacciSeries = [];
  
    // Generate the series
    let a = 0,
      b = 1,
      c = 0;
    for (let i = 0; i < maxNumber; i++) {
      fibonacciSeries.push(a);
      c = a + b;
      a = b;
      b = c;
    }
  
    // Display the series on the page
    const outputDiv = document.getElementById("fibonacci-output");
    outputDiv.innerHTML = `Fibonacci Series: ${fibonacciSeries.join(", ")}`;
  }
  