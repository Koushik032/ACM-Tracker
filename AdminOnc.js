function NumOfCon() {
    // Get the number of links entered by the user
    const numLinks = document.getElementById("num-contests").value;
  
    // Get the container element where you want to add the new inputs
    const container = document.getElementById("contest-labels");
  
    // Clear any existing inputs within the container (optional)
    container.innerHTML = ""; // This removes any previously generated inputs
  
    // Generate the new input elements
    for (let i = 1; i <= numLinks; i++) {
      const newInput = document.createElement("input");
      newInput.type = "url"; // Set the input type to "url" for link input
      newInput.id = `link-${i}`; // Assign unique IDs for each input
      newInput.placeholder = `Link ${i}`; // Add a placeholder for clarity
      newInput.required = true; // Make the new inputs required
  
      // Append the new input element to the container
      container.appendChild(newInput);
    }
  }