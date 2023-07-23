<!------------------------------Template for Pages--------------------------------------->
<!---------------------Make a new page and Copy the whole code--------------------------->
<!------------------------------Stylesheeet and syntax----------------------------------->
<?php session_start(); ?>
<style><?php include 'CSS\style.css'; ?></style>
<?php include 'SYNTAX\divopen.php';?>
<!-------------------------------------Header-------------------------------------------->
<?php
if(!isset($_SESSION['username'])){
    include 'SECTION\header.php';
}else{
    include 'SECTION\home-header.php';
}
?>
<!-------------------------------------Sidebar ------------------------------------------>
<?php include 'SECTION\sidebar.php'; ?>
<!-----------------------------------Page Content Goes here----------------------------->
<div class="col-lg-9">
<!------.............................Dont touch Above Code--------------------------->
<!--------------------------------------  Your Code Goes here below ---------------------------------------->


<!--Heading goes on h3 tag and subheading will in h5 tag.-->

<h3>Research Areas</h3>
<hr>
<p><b>Aim-</b> The basic aim of this journal is to provide platform for the researcher, innovators, scholars and students to share their research through worldwide with us. We promote research in all disciplines and the advancement of knowledge and understanding. This journal will provide a quality readable and valuable addition to the knowledge this will serve as resources for researchers along with to provide support to the scholars to enable them to undertake and disseminate their research and to help them for development of their own skills of reasoning and understanding. It is a peer-reviewed journal aspiring to publish high quality of original Research Articles, Review Articles, Survey Articles, Case Study, Technical Notes and Short Communication. The preference will be given to the research articles and articles which contains advance research concepts which will be helpful to the society.</p>
<p><b>Scope-</b> IJCSE which is cross boundaries between different faculties. IJCSE is the place for exchange of information and research results within the following scope: (But are not limited to the following)</p>
<h5>Computer Science Engineering and Technology</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Advanced Algorithms</li>
            <li>Applications of Computer Science</li>
            <li>Architecture Evaluations</li>
            <li>Artificial intelligence</li>
            <li>Automation and Mobile Robots</li>
            <li>Bioengineering</li>
            <li>Bioinformatics</li>
            <li>Blue-Tooth Technologies</li>
            <li>Brain machine Interface System</li>
            <li>Brain Mapping</li>
            <li>Cloud Computing</li>
            <li>Computational Biology</li>
            <li>Computational linguistics</li>
            <li>Computational Statistics</li>
            <li>Computational Mathematics</li>
            <li>Computer Graphics</li>
            <li>Computer Applications</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Computer Architecture</li>
            <li>Compiler</li>
            <li>Computer Software / Hardware</li>
            <li>Cyber-Science and Cyber-Space</li>
            <li>Data and Information Systems</li>
            <li>Data Bases and its applications</li>
            <li>Data Compression</li>
            <li>Data Engineering</li>
            <li>Data Fusion</li>
            <li>Data Mining</li>
            <li>Data Warehousing</li>
            <li>Databases</li>
            <li>Design of Algorithms</li>
            <li>Digital Speech Processing</li>
            <li>Distributed Data Base</li>
            <li>Distributed Knowledge-base Systems</li>
            <li>Distributed Multimedia</li>
        </ul>
    </div>
</div>
<h5>Computer Networks</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Ad hoc & sensor networks</li>
            <li>Adaptive applications</li>
            <li>Admission/Congestion/Flow Control</li>
            <li>Authentication, authorization, accounting</li>
            <li>Broadband Communications</li>
            <li>Broadband Networks</li>
            <li>Channel Estimation and Cancellation</li>
            <li>Communication</li>
            <li>Communication Software</li>
            <li>Communication Systems Architectures and Protocols</li>
            <li>Congestion & flow control</li>
            <li>Congestion Management</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Cross-layer optimization</li>
            <li>Embedded networks</li>
            <li>High-speed access networks</li>
            <li>Home and SOHO networks</li>
            <li>Interconnection Networks</li>
            <li>Internet and distributed computer systems</li>
            <li>Internet and Web Applications</li>
            <li>IPv6 deployment & migration</li>
            <li>IPv6 deployment & migration</li>
            <li>Location-dependent services</li>
            <li>Microwaves, Antennas, Propagation</li>
        </ul>
    </div>
</div>
<h5>Mobile Computing</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Mobility management</li>
            <li>Distributed Real Time Systems</li>
            <li>E-commerce</li>
            <li>Education Technology and Training</li>
            <li>Educational Software</li>
            <li>Embedded Systems & Applications</li>
            <li>Environmental Protection</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Fault Tolerance</li>
            <li>Genetic Algorithms</li>
            <li>Genomics</li>
            <li>Granular Computing</li>
            <li>Grid & Parallel computing</li>
            <li>High performance computing</li>
            <li>High Performance Languages</li>
        </ul>
    </div>
</div>
<h5>Multimedia Computing</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>AI and Image Recognition</li>
            <li>Audio Analysis, Modeling, Processing and Transformation</li>
            <li>Content-Based Image Retrieval</li>
            <li>Distributed Multimedia System</li>
            <li>Image Clustering</li>
            <li>Image Modeling and Editing</li>
            <li>Interfaces for Multimedia Creation</li>
            <li>Media Fusion for Communication and Presentation</li>
            <li>Modelling and Simulation</li>
            <li>Multimedia</li>
            <li>Multimedia Coding and Encryption</li>
            <li>Multimedia Databases</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Human Centered Transportation System (Special Session)</li>
            <li>Human computer Interaction</li>
            <li>Image Processing</li>
            <li>Industrial Applications</li>
            <li>Information Technology</li>
            <li>Information Theory</li>
            <li>Intelligent Agents</li>
            <li>Intelligent Internet System</li>
            <li>Intelligent Learning in Control System</li>
            <li>Intelligent Power & Energy System</li>
            <li>Intelligent Systems</li>
            <li>Intelligent Transportation System</li>
        </ul>
    </div>
</div>
<h5>Computational Mathematics</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Algorithms and Implementations</li>
            <li>Analysis of Mathematics</li>
            <li>Applications in CAGD/CAD, robotics, and computer vision</li>
            <li>Authoring languages and tools</li>
            <li>Automated mathematical reasoning</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Automated Reasoning</li>
            <li>Challenges and solutions for mathematical workflow</li>
            <li>Collaboration tools for mathematics</li>
            <li>Computational algebra and geometry</li>
            <li>Computational Differential Equations</li>
        </ul>
    </div>
</div>
<h5>Computational Oriented</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Cheminformatics</li>
            <li>Chemometrics</li>
            <li>Computational biology</li>
            <li>Computational chemistry</li>
            <li>Computational economics</li>
            <li>Computational electromagnetics</li>
            <li>Computational engineering</li>
            <li>Computational finance</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Computational fluid dynamics</li>
            <li>Computational forensics</li>
            <li>Computational geophysics</li>
            <li>Computational Intelligence</li>
            <li>Computational linguistics</li>
            <li>Computational mathematics</li>
            <li>Computational mechanics</li>
        </ul>
    </div>
</div>
<h5>Software Engineering</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>The Software Process</li>
            <li>Software Engineering Practice</li>
            <li>Web Engineering</li>
            <li>Quality Management</li>
            <li>Managing Software Projects</li>
            <li>Advanced Topics in Software Engineering</li>
            <li>Multimedia and Visual Software Engineering</li>
            <li>Software Maintenance and Testing</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Languages and Formal Methods</li>
            <li>Web-based Education Systems and Learning Applications</li>
            <li>Software Engineering Decision Making</li>
            <li>Knowledge-based Systems and Formal Methods</li>
            <li>Search Engines</li>
        </ul>
    </div>
</div>
<h5>Mechanical Engineering</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Acoustics</li>
            <li>Active perception & 3-D perception</li>
            <li>Aerodynamics</li>
            <li>Analytical mechanics</li>
            <li>Applied Mechanics</li>
            <li>Artificial intelligence</li>
            <li>Automatic 3D buildings design</li>
            <li>Automation and control</li>
            <li>Automation, CNC Machines & Robotics</li>
            <li>Automobiles</li>
            <li>Automotive Engineering</li>
            <li>Autonomous robotic vehicles</li>
            <li>Ballistics</li>
            <li>Bioengineering materials</li>
            <li>Biomechanics</li>
            <li>Biomedical Engineering</li>
            <li>Biotribology</li>
            <li>Bulk deformation processes and sheet metal forming</li>
            <li>CAD/CAM/CIM</li>
            <li>CFD</li>
            <li>Combustion and Fuels</li>
            <li>Composite and Smart Materials</li>
            <li>Composites, ceramics, polymers / processing</li>
            <li>Compressible Flows</li>
            <li>Computational Mechanics</li>
            <li>Computational mechanics / FEM modelling and simulation</li>
            <li>Computational Techniques</li>
            <li>Computer-based manufacturing technologies: CNC, CAD, CAM, FMS, CIM</li>
            <li>Controls and Dynamics</li>
            <li>Decision Analysis and Methods</li>
            <li>Design and manufacture, medical device manufacturing</li>
            <li>Dynamics and Vibration</li>
            <li>E-Business and E-Commerce</li>
            <li>Energy Engineering and Management</li>
            <li>Engineering Economy and Cost Analysis</li>
            <li>Engineering Education and Training</li>
            <li>Engineering Materials</li>
            <li>Environmental Management</li>
            <li>Evolutionary robotics</li>
            <li>Facilities Planning and Management</li>
            <li>Fatigue and Fracture</li>
            <li>Fluid Dynamics</li>
            <li>Fluid mechanics</li>
            <li>Fluid Mechanics</li>
            <li>Fluid Mechanics and Machinery</li>
            <li>Fracture</li>
            <li>Friction and wear of materials, corrosion resistance</li>
            <li>Fuels and Combustion</li>
            <li>Functionality graded materials, cellular materials</li>
            <li>GA and neural networks for mobile robots</li>
            <li>Gaits of humanoids</li>
            <li>General mechanics</li>
            <li>Geomechanics</li>
            <li>Global Manufacturing and Management</li>
            <li>Hardware architecture for humanoids</li>
            <li>Health and Safety</li>
            <li>Heat and Mass Transfer</li>
            <li>Heat Transfer and Thermal Power</li>
            <li>Heat treatments, microstructure and materials properties</li>
            <li>Human Factors</li>
            <li>Humanoid motion planning</li>
            <li>HVAC</li>
            <li>Hydrostatic transmissions and pneumatic</li>
            <li>I.C. Engines & Automobile Engineering</li>
            <li>Industrial Economics & Management</li>
            <li>Industrial Robotics</li>
            <li>Information Processing and Engineering</li>
            <li>Instrumentation and Control</li>
            <li>Instrumentation and measurement</li>
            <li>Intelligent Control systems</li>
            <li>Intelligent Systems</li>
            <li>Internal Combustion Engines</li>
            <li>Joining and fracture mechanics</li>
            <li>Kinematics and dynamics of rigid bodies</li>
            <li>Legged locomotion</li>
            <li>Lubricants and lubrication</li>
            <li>Machinability and formability of materials</li>
            <li>Machine Design</li>
            <li>Machinery and Machine Design</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Machining (traditional and non-traditional processes)</li>
            <li>Manufacturing and Production Processes</li>
            <li>Manufacturing design for 3r "reduce, reuse, recycling"</li>
            <li>Manufacturing Engineering</li>
            <li>Manufacturing Systems</li>
            <li>Marine System Design</li>
            <li>Material Engineering</li>
            <li>Quality Control and Management</li>
            <li>Rapid manufacturing technologies and prototyping, remanufacturing</li>
            <li>Recycling, materials and industrial wastes, products and recycling systems</li>
            <li>Refrigeration & Air-Conditioning</li>
            <li>Reliability and Maintenance Engineering</li>
            <li>Renewable energies technology</li>
            <li>Resistance and Propulsion</li>
            <li>Robot cognition, adaptation and learning</li>
            <li>Robotic Automation and Control</li>
            <li>Robotics and Robot Applications</li>
            <li>Rotor dynamics</li>
            <li>Safety, Security and Risk Management</li>
            <li>Service Innovation and Management</li>
            <li>SLAM Algorithms</li>
            <li>Solid Mechanics</li>
            <li>Solid mechanics</li>
            <li>Solid mechanics and structural mechanics</li>
            <li>Space robotics</li>
            <li>Structural Dynamics</li>
            <li>Supply Chain Management</li>
            <li>Sustainable and green manufacturing</li>
            <li>System Dynamics and Simulation</li>
            <li>Systems Modeling and Simulation</li>
            <li>Technology and Knowledge Management</li>
            <li>Textile and Leather Technology</li>
            <li>Thermodynamics and Combustion Engineering</li>
            <li>Thermodynamics and heat transfer</li>
            <li>Transport Phenomena</li>
            <li>Tribology and surface engineering</li>
            <li>Tribology and Terotechnolog</li>
            <li>Turbulence</li>
            <li>Vibration and acoustics</li>
            <li>Vibrations</li>
            <li>Wood and wood products</li>
            <li>Material Science & Metallurgy</li>
            <li>Material Science and Processing</li>
            <li>Mechanical Design</li>
            <li>Mechanical Power Engineering</li>
            <li>Mechanisms and machines</li>
            <li>Mechatronics</li>
            <li>Mechatronics and robotics</li>
            <li>MEMS and Nano Technology</li>
            <li>Metallic alloys and metal casting</li>
            <li>Micro and nanomechanics</li>
            <li>Microsensors and actuators</li>
            <li>Mobile robots</li>
            <li>Multibody Dynamics</li>
            <li>Multifunctional and smart materials</li>
            <li>Multi-robot systems</li>
            <li>Nanomaterial Engineering</li>
            <li>Nanomaterials and Nanomanufacturing</li>
            <li>Neural decoding algorithms</li>
            <li>New and Renewable Energy</li>
            <li>Noise and Vibration</li>
            <li>Noise Control</li>
            <li>Non-destructive Evaluation</li>
            <li>Nonlinear Dynamics</li>
            <li>Oil and Gas Exploration</li>
            <li>Operations Management</li>
            <li>Operations Research</li>
            <li>Operations Research and Industrial Management</li>
            <li>Optimization methods</li>
            <li>Path Planning</li>
            <li>PC guided design and manufacture</li>
            <li>Plasticity Mechanics</li>
            <li>Pollution and Environmental Engineering</li>
            <li>Precision mechanics, mechatronics</li>
            <li>Production Management</li>
            <li>Production Planning and Control</li>
            <li>Production Technology</li>
            <li>Project Management</li>
            <li>Quality assurance and environment protection</li>
        </ul>
    </div>
</div>
<h5>Civil Engineering</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Dynamics and Random Vibrations</li>
            <li>Fracture and Fatigue Mechanics</li>
            <li>Non-linear behavior of structures</li>
            <li>Finite Methods in Engineering</li>
            <li>Artificial Neural Network & Fuzzy logic Modeling</li>
            <li>Decision Support System (DSS)</li>
            <li>Heuristic Modeling</li>
            <li>Remote Sensing & GIS</li>
            <li>Structural Dynamics</li>
            <li>Structural heath monitoring</li>
            <li>Structural control</li>
            <li>Earthquake resistant design</li>
            <li>Retrofitting of Structures</li>
            <li>Concrete Technology</li>
            <li>Surface and Ground Water Hydrology</li>
            <li>Computational open channel hydraulics</li>
            <li>Water resources planning</li>
            <li>Watershed Management</li>
            <li>Lakes and Reservoirs</li>
            <li>Water Resources Systems analysis</li>
            <li>Irrigation Management (Distribution, Pricing, PIM, IMT etc.)</li>
            <li>Dams and Barrages</li>
            <li>Soil dynamics</li>
            <li>Machine foundations</li>
            <li>Rock Mechanics & Rock Engineering</li>
            <li>Ground Improvement Techniques</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Geo-Environmental Engineering</li>
            <li>Foundation Engineering</li>
            <li>Concrete bridges</li>
            <li>Suspension bridges</li>
            <li>Steel and Girder Bridges</li>
            <li>Tunneling & Underground structures</li>
            <li>Construction Management</li>
            <li>Open Penstocks</li>
            <li>Hydropower structures</li>
            <li>Water Resources Structures</li>
            <li>Lake tapping</li>
            <li>Smart buildings</li>
            <li>Green buildings</li>
            <li>Tall structures</li>
            <li>Safety Engineering</li>
            <li>Environmental Geo-informatics</li>
            <li>Water and waste water Management</li>
            <li>Environmental Imp[act Assessment</li>
            <li>Solid waste Analysis & Management</li>
            <li>Bio-Degradation of Solid Wastes</li>
            <li>Air and Noise Pollution</li>
            <li>Traffic Engineering</li>
            <li>Town/City planning</li>
            <li>Demand Modeling</li>
            <li>Land use planning</li>
            <li>Traffic Safety</li>
        </ul>
    </div>
</div>
<h5>Electronics & Electrical Engineering (Power, Control &Comp Sys, Telecom and Biomedical)</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Electric Power Generation</li>
            <li>Transmission and Distribution</li>
            <li>Power Electronics</li>
            <li>Power Quality</li>
            <li>Power Economic</li>
            <li>FACTS</li>
            <li>Renewable Energy</li>
            <li>Electric Traction</li>
            <li>Electromagnetic Compatibility</li>
            <li>Electrical Engineering Materials</li>
            <li>High Voltage Insulation Technologies</li>
            <li>High Voltage Apparatuses</li>
            <li>Lightning Detection and Protection</li>
            <li>Power System Analysis</li>
            <li>SCADA</li>
            <li>Electrical Measurements</li>
            <li>Optimal</li>
            <li>Robust and Adaptive Controls</li>
            <li>Non Linear and Stochastic Controls</li>
            <li>Modeling and Identification</li>
            <li>Robotics</li>
            <li>Image Based Control</li>
            <li>Hybrid and Switching Control</li>
            <li>Process Optimization and Scheduling</li>
            <li>Control and Intelligent Systems</li>
            <li>Complex Adaptive Systems.</li>
            <li>Microelectronic System</li>
            <li>Electronic Materials</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>ASIC</li>
            <li>System-on-a-Chip (SoC) Using CAD Tools</li>
            <li>System-on-a-Chip (SoC) Using CAD Tools</li>
            <li>System-on-a-Chip (SoC) Using CAD Tools</li>
            <li>System-on-a-Chip (SoC) Using CAD Tools</li>
            <li>Wireless and Mobile Communications</li>
            <li>Information Theory and Coding</li>
            <li>Communication Electronics and Microwave</li>
            <li>Radar Imaging</li>
            <li>Distributed Platform</li>
            <li>Communication Network and Systems</li>
            <li>Telemetric Services</li>
            <li>Security Network</li>
            <li>Radio Communication.</li>
            <li>Biomedical Physics</li>
            <li>Biomedical Transducers and instrumentation</li>
            <li>Biomedical System Design and Projects</li>
            <li>Medical Imaging Equipment and Techniques</li>
            <li>Telemedicine System</li>
            <li>Biomedical Imaging and Image Processing</li>
            <li>Biomedical Informatics and Telemedicine</li>
            <li>Biomechanics and Rehabilitation Engineering</li>
            <li>Biomaterials and Drug Delivery Systems.</li>
        </ul>
    </div>
</div>
<h5>Management and Information Sciences</h5>
<div class="row">
    <div class="col-md">
        <ul>
            <li>Humana resource management and computing science</li>
            <li>Architectures/infrastructures, agent/intelligent/knowledge-based systems</li>
            <li>[Bio]medical informatics, social informatics</li>
            <li>Collaborative work systems/management, human factors</li>
            <li>Data mining, knowledge discovery, data warehouse, OLAP, ontologies</li>
            <li>Database architectures/applications, decision support systems</li>
            <li>Enterprise/executive information systems, ethics in IS</li>
            <li>Functional information systems, impacts of information systems</li>
            <li>IT globalisation, interorganisational systems, e-commerce, virtual business</li>
            <li>ICTs, media, communications, emerging information technologies</li>
            <li>IS education, outsourcing, performance, planning, quality, security, theories, models</li>
            <li>Knowledge management, organisational learning, knowledge networks</li>
            <li>Management information systems, management of information resources</li>
            <li>Metrics/benchmarking, capabilities evaluation, research methods</li>
            <li>Software process/project management, workflow management</li>
        </ul>
    </div>
    <div class="col-md">
        <ul>
            <li>Strategic IS, IT valuation, information economics, competitive advantage</li>
            <li>Role of IT in Management sciences</li>
            <li>Managing the rapid changes in information technology</li>
            <li>Emerging advances in IT and new applications</li>
            <li>Implications of digital convergence and growth of IT</li>
            <li>Managing national information infrastructure</li>
            <li>Managing networks, including corporate networks</li>
            <li>Intelligent organisations, IT and new forms of organisations</li>
            <li>IT and network organisations, electronic governance, jurisdiction in cyberspace</li>
            <li>Organisational barriers to implementing IT, diffusion and future of IT</li>
            <li>Enterprise resource models, knowledge management/repositories</li>
            <li>Customer relationship management and IT</li>
            <li>Knowledge economy, IT clusters, intellectual property rights in IT</li>
            <li>Intelligent agents, distributed software development, advances in encryption</li>
            <li>Knowing machines</li>
            <li>IT and gene mapping revolution, bioinformatics, social informatics</li>
            <li>Management/geographic information, geographic information systems</li>
        </ul>
    </div>
</div>


<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
