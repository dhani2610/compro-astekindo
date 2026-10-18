<?php
$content = file_get_contents('C:/Users/ASUS/.gemini/antigravity-ide/brain/e9387b6c-e08d-4413-868f-94057832074d/.system_generated/steps/1814/content.md');

preg_match_all('/<tr class="bg-white border-b hover:bg-gray-50">\s*<td[^>]*>(\d+)<\/td>\s*<td[^>]*>(.*?)<\/td>\s*<td[^>]*>\s*<span[^>]*>(\d+)<\/span>/s', $content, $matches, PREG_SET_ORDER);

echo "Total matches: " . count($matches) . PHP_EOL;

$schemes = [];
foreach ($matches as $m) {
    $num = (int)$m[1];
    $rawTitle = trim(strip_tags($m[2]));
    $units = (int)$m[3];

    // The user requested: "Di depan nama nya dibuat kata Training"
    // If it doesn't already start with "Training", prepend "Training "
    $title = preg_replace('/^Training\s+/i', '', $rawTitle);
    $trainingTitle = "Training " . $title;

    $schemes[] = [
        'no' => $num,
        'raw_title' => $rawTitle,
        'title' => $trainingTitle,
        'units' => $units,
    ];
}

file_put_contents(__DIR__ . '/storage/app/bnsp_schemes_202.json', json_encode($schemes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "Successfully extracted " . count($schemes) . " schemes to storage/app/bnsp_schemes_202.json\n";

// Show first 5 and last 5
for ($i = 0; $i < min(5, count($schemes)); $i++) {
    echo $schemes[$i]['no'] . '. ' . $schemes[$i]['title'] . ' (' . $schemes[$i]['units'] . ' Unit)' . PHP_EOL;
}
echo "...\n";
for ($i = max(0, count($schemes) - 5); $i < count($schemes); $i++) {
    echo $schemes[$i]['no'] . '. ' . $schemes[$i]['title'] . ' (' . $schemes[$i]['units'] . ' Unit)' . PHP_EOL;
}
