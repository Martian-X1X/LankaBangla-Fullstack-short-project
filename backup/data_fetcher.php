<?php
header('Content-Type: application/json');

$host = 'localhost'; 
$user = 'root';  
$pass = '';  
$db = 'db'; 

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$graphType = $_GET['graphType'];

$data = [
    'labels' => [],
    'datasets' => [
        [
            'label' => '', // This will be filled dynamically based on $graphType
            'data' => [],
            'backgroundColor' => [],
            'borderColor' => [],
            'borderWidth' => 1
        ]
    ]
];


switch ($graphType) {
    case 'division':
        $query = "SELECT state_division, COUNT(*) as count FROM bo_contactdetails GROUP BY state_division";
        $keyForLabel = 'state_division';
        $datasetLabel = 'BO A/C holders per division';
        break;

    case 'branch':
        $query = "SELECT branch_name, COUNT(*) as count FROM kyc_form GROUP BY branch_name";
        $keyForLabel = 'branch_name';
        $datasetLabel = 'BO A/C holders per Branch';
        break;

    case 'manager_in_branch':
        $query = "SELECT branch_name, opening_officer, manager_id, COUNT(*) as count FROM kyc_form GROUP BY branch_name, opening_officer, manager_id";
        $keyForLabel = 'branch_name'; // Assuming you want branch_name as the label. Modify if needed.
        $datasetLabel = 'BO A/C holders by CRM in a Branch';
        break;

    case 'gender_in_branch':
        // This query is complex as it involves multiple joins, so the exact SQL might need adjustments based on database schema
        $query = "SELECT k.branch_name, b.incase_of_individual, COUNT(*) as count 
                  FROM kyc_form k 
                  JOIN bo_boform b ON k.form_id = b.form_id 
                  JOIN bo_applicant a ON b.applicant_id = a.applicant_id 
                  GROUP BY k.branch_name, b.incase_of_individual";
        $keyForLabel = 'branch_name';
        $datasetLabel = 'Male & Female BO A/C holders in a Branch';
        break;

    case 'gender_per_division':
        // Similar complexity as above
        $query = "SELECT c.state_division, b.incase_of_individual, COUNT(*) as count 
                  FROM bo_contactdetails c 
                  JOIN bo_boform b ON c.contact_id = b.contact_id 
                  JOIN bo_applicant a ON b.applicant_id = a.applicant_id 
                  GROUP BY c.state_division, b.incase_of_individual";
        $keyForLabel = 'state_division';
        $datasetLabel = 'Male & Female BO A/C holders per division';
        break;

    case 'year_wise_opening':
        // Extracting YEAR from date and counting
        $query = "SELECT YEAR(submission_date) as year, COUNT(*) as count FROM kyc_form GROUP BY YEAR(submission_date)";
        $keyForLabel = 'year';
        $datasetLabel = 'BO A/C opening year-wise';
        break;

    default:
        echo json_encode(['error' => 'Invalid graph type']);
        exit;
}



$result = $connection->query($query);

if ($result) {
    $data['datasets'][0]['label'] = $datasetLabel;
    while ($row = $result->fetch_assoc()) {
        $data['labels'][] = $row[$keyForLabel];
        $data['datasets'][0]['data'][] = $row['count'];
        $data['datasets'][0]['backgroundColor'][] = 'rgba(255, 99, 132, 0.2)';
        $data['datasets'][0]['borderColor'][] = 'rgba(255, 99, 132, 1)';
    }
    echo json_encode($data);
} else {
    echo json_encode(['error' => $connection->error]);
}

$connection->close();
?>
