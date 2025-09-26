<!-- Keyword Search in Research Abstracts
Objective: To search for specific keywords in a string and return contextual results. -->
<?php
// Sample research abstract
$abstract = "This study explores the impact of climate change on agricultural productivity in semi-arid regions. 
It highlights the role of sustainable farming practices and the integration of AI-driven irrigation systems. 
The findings suggest a significant correlation between temperature rise and crop yield reduction.";

// Keywords to search
$keywords = ["climate change", "AI", "temperature", "crop yield"];

// Function to search keywords and return context
function searchKeywords($text, $keywords, $contextLength = 40) {
    echo "<h2>Keyword Search Results</h2>";
    foreach ($keywords as $keyword) {
        $pos = stripos($text, $keyword); // Case-insensitive search
        if ($pos !== false) {
            // Extract context around the keyword
            $start = max(0, $pos - $contextLength);
            $end = min(strlen($text), $pos + strlen($keyword) + $contextLength);
            $snippet = substr($text, $start, $end - $start);
            echo "<p><strong>$keyword</strong> found: ...<em>$snippet</em>...</p>";
        } else {
            echo "<p><strong>$keyword</strong> not found in abstract.</p>";
        }
    }
}

// Run the keyword search
searchKeywords($abstract, $keywords);
?>
