function prepniText() {
    var demo = document.getElementById('demo');
    var button = document.getElementById('toggleButton');

    if (demo.style.display === 'none') {
        demo.style.display = 'block';
        button.innerText = 'Skry Text';
    } else {
        demo.style.display = 'none';
        button.innerText = 'Zobraz Text';
    }
}