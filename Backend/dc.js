async function loadSkills() {
    try {
        const response = await fetch('api/skills.php'); // Adjust to your API endpoint
        const skills = await response.json();

        const skillsList = document.getElementById('skills-list');
        skills.forEach(skill => {
            const li = document.createElement('li');
            li.textContent = skill.skill_name; // Assuming skill object has a property skill_name
            skillsList.appendChild(li);
        });
    } catch (error) {
        console.error('Error loading skills:', error);
    }
}

// Load skills when the page loads
document.addEventListener('DOMContentLoaded', loadSkills);
