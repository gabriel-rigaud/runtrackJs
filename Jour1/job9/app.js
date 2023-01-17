function tri(numbers, order) {
    if (order === 'asc') {
        numbers.sort((a, b) => a - b);
    } else if (order === 'desc') {
        numbers.sort((a, b) => b - a);
    }
    return numbers;
}

// Appeler la fonction lorsque le bouton est cliqué
document.getElementById("myBtn").addEventListener("click", tri);


