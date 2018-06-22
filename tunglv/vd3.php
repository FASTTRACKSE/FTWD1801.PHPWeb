<?php
$diem=9;
if ($diem>=8) {
	echo "xếp loại giỏi";
}
else {
	if($diem>=7) {
		echo "xếp loại khá";
	}else {
		if($diem>=5) {
			echo "xếp loại trung bình";
		}else {
			echo "xếp loại yếu";
		}
	}
}
?>