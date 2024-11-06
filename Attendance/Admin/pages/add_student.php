<div class="container my-5" id="addstud" style="display: none; max-width: 500px; position: absolute; top: 20px; right: 20px;">
    <div class="card shadow p-4">
        
        <form action="save_student.php" method="POST" id="addStudentForm">
            <div class="row">
                <!-- First Name -->
                <div class="col-md-6 mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>

                <!-- Last Name -->
                <div class="col-md-6 mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
            </div>

            <div class="row">
                <!-- Middle Initial -->
                <div class="col-md-4 mb-3">
                    <label for="mi" class="form-label">Middle Initial</label>
                    <input type="text" class="form-control" id="mi" name="mi" maxlength="1">
                </div>

                <!-- Student Number -->
                <div class="col-md-8 mb-3">
                    <label for="student_no" class="form-label">Student No.</label>
                    <input type="text" class="form-control" id="student_no" name="student_no" required>
                </div>
            </div>

            <div class="row">
                <!-- Weight -->
                <div class="col-md-4 mb-3">
                    <label for="weight" class="form-label">Weight (kg)</label>
                    <input type="number" class="form-control" id="weight" name="weight" step="0.1" required>
                </div>

                <!-- Height -->
                <div class="col-md-4 mb-3">
                    <label for="height" class="form-label">Height (cm)</label>
                    <input type="number" class="form-control" id="height" name="height" required>
                </div>

                <!-- BMI -->
                <div class="col-md-4 mb-3">
                    <label for="bmi" class="form-label">BMI</label>
                    <input type="text" class="form-control" id="bmi" name="bmi" readonly>
                </div>
            </div>

            <div class="row">
                <!-- Blood Type -->
                <div class="col-md-4 mb-3">
                    <label for="bloodtype" class="form-label">Blood Type</label>
                    <select class="form-select" id="bloodtype" name="bloodtype" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-outline-success me-2">Save Student</button>
                <button type="button" class="btn btn-outline-secondary" onclick="showSection(event, 'student')">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('weight').addEventListener('input', calculateBMI);
    document.getElementById('height').addEventListener('input', calculateBMI);

    function calculateBMI() {
        let weight = parseFloat(document.getElementById('weight').value);
        let height = parseFloat(document.getElementById('height').value) / 100;

        if (weight && height) {
            let bmi = (weight / (height * height)).toFixed(2);
            document.getElementById('bmi').value = bmi;
        } else {
            document.getElementById('bmi').value = '';
        }
    }
</script>
