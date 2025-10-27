<!DOCTYPE html>
<html>
<head>
    <title>Merge Sort</title>
</head>
<body>
    <h1>Merge Sort - Ordenamiento Alfabético</h1>
    <button onclick="location.href='index.html'">Volver al Inicio</button>
    <div id="result"></div>

    <script>
        function mergeSort(arr) {
            if (arr.length <= 1) return arr;
            
            const mid = Math.floor(arr.length / 2);
            const left = mergeSort(arr.slice(0, mid));
            const right = mergeSort(arr.slice(mid));
            
            return merge(left, right);
        }

        function merge(left, right) {
            let result = [];
            let i = 0, j = 0;
            
            while (i < left.length && j < right.length) {
                if (left[i].toLowerCase() < right[j].toLowerCase()) {
                    result.push(left[i]);
                    i++;
                } else {
                    result.push(right[j]);
                    j++;
                }
            }
            
            return result.concat(left.slice(i)).concat(right.slice(j));
        }

        const words = ["Manzana", "banana", "Cereza", "árbol", "Zorro", "elefante", "gato"];
        const sortedWords = mergeSort([...words]);
        
        document.getElementById('result').innerHTML = `
            <h2>Lista original:</h2>
            <p>[${words.join(', ')}]</p>
            <h2>Lista ordenada (alfabético):</h2>
            <p>[${sortedWords.join(', ')}]</p>
        `;
    </script>
</body>
</html>
