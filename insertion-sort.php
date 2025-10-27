<!DOCTYPE html>
<html>
<head>
    <title>Insertion Sort</title>
</head>
<body>
    <h1>Insertion Sort - Ordenamiento de Nombres</h1>
    <button onclick="location.href='index.html'">Volver al Inicio</button>
    <div id="result"></div>

    <script>
        function insertionSort(arr) {
            for (let i = 1; i < arr.length; i++) {
                let key = arr[i];
                let j = i - 1;
                
                while (j >= 0 && arr[j].toLowerCase() > key.toLowerCase()) {
                    arr[j + 1] = arr[j];
                    j = j - 1;
                }
                arr[j + 1] = key;
            }
            return arr;
        }

        const names = ["María", "Carlos", "Ana", "Pedro", "Luisa", "José", "Elena"];
        const sortedNames = insertionSort([...names]);
        
        document.getElementById('result').innerHTML = `
            <h2>Lista original:</h2>
            <p>[${names.join(', ')}]</p>
            <h2>Lista ordenada (alfabético):</h2>
            <p>[${sortedNames.join(', ')}]</p>
        `;
    </script>
</body>
</html>
