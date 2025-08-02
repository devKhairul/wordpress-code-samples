<?php

/**
 * Template Name: Component Repair
 */

get_header();
?>

<main id="primary" class="site-main component-repair">

    <?php if ( get_field('hero_heading') || get_field('hero_subheading') ) : ?>
        <?php get_template_part( 'template-parts/hero' ); ?>
    <?php endif; ?>

    <div class="ast-container">
        <?php if ( get_field('intro_heading') || get_field('intro_copy') ) : ?>
            <?php get_template_part( 'template-parts/intro' ); ?>
        <?php endif; ?>

        <section class="pneumatics" id="pneumatics">
            <div class="pneumatics__row-1">
                <h2>Pneumatic Systems: Aviation MRO Services</h2>    
            
                <p>As a core component of our aviation MRO services, Aeropol offers specialized Pneumatic Systems MRO to support your aircraft’s operational integrity and performance. Our expert technicians are equipped with advanced skills in the maintenance, repair, and overhaul of pneumatic systems, ensuring tailored solutions for the unique requirements of your fleet. By focusing on safety, compliance, and efficiency, we strive to minimize downtime and keep your aircraft operating at peak performance.</p>

                <div class="pneumatics__photo-grid">
                    <img src="/wp-content/uploads/2024/12/pneumatic1.jpg" alt="People working on a pneumatic system.">
                    <img src="/wp-content/uploads/2024/12/pneumatic2.jpg" alt="People testing a pneumatic system.">
                </div>
            </div>

            <div class="pneumatics__row-2">
                <h3>Among Our Pneumatic Component MRO Services Are:</h3>

                <div class="pneumatics__grid">
                    <div class="pneumatics__card">
                        <h3>Air Cycle Machines (ACM)</h3>      
                        <p>We specialize in the maintenance of Air Cycle Machines, addressing common issues like component wear, imbalances, and airflow inefficiencies. Our solutions restore efficiency and ensure optimal cooling performance for a pleasurable flight experience inside the cabin.</p>
                    </div>

                    <div class="pneumatics__card">
                        <h3>Auxiliary Power Unit (APU) Cooling Fans</h3>      
                        <p>Our team provides thorough inspections, repairs, and balancing services for APU cooling fans. We ensure smooth operation and optimal cooling efficiency, preventing overheating and extending the APU’s service longevity. </p>
                    </div>

                    <div class="pneumatics__card">
                        <h3>Pneumatic Flow Control Valves</h3>      
                        <p>We expertly inspect, repair, and calibrate pneumatic flow control valves to eliminate leaks, restore pressure regulation, and optimize airflow management. Each valve undergoes rigorous testing to ensure reliable operation in demanding conditions.</p>
                    </div>

                    <div class="pneumatics__card">
                        <h3>Heat Exchangers</h3>      
                        <p>We offer specialized cleaning, inspection, and repair services for pneumatic heat exchangers. By addressing blockage restrictions, corrosion, and performance degradation, we help maintain efficient thermal transfer and system reliability on the aircraft. </p>
                    </div>
                </div>
                
                <div class="pneumatics__footer">
                    <p>Aeropol’s Pneumatic Systems MRO services are prioritized to deliver remarkable operational performance while providing the highest standards in safety, to ensure your fleet’s pneumatic systems operate at maximum efficiency and perform with longevity. With an emphasis on our cost reduction methodology to keep maintenance costs down for the operator, we pride ourselves in meeting or exceeding regulatory standards. Our services support seamless transition between cost and performance so you can fly longer.</p>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/cta' ); ?>

        <section class="hydraulics" id="hydraulics">
            <div class="hydraulics__row-1">
                <h2>Hydraulics: Aviation MRO Services</h2>    
            
                <p>We offer specialized Hydraulics MRO, ensuring your aircraft’s hydraulic systems operate efficiently with robust reliability. Our experienced technicians are skilled in hydraulic system maintenance, repair, and overhaul, offering services tailored to meet the demands of your fleet. Focusing on safety, compliance, and minimizing downtime, we work diligently to keep your aircraft in the air for seamless operation.</p>

                <div class="hydraulics__photo-grid">
                    <img src="/wp-content/uploads/2024/12/Hydaraulics1.jpg" alt="Hydraulic system">
                    <img src="/wp-content/uploads/2024/12/Hydaraulics2.jpg" alt="Hydraulic system">
                </div>
            </div>

            <div class="hydraulics__row-2">
                <h3>Among Our Hydraulic Component MRO Services Include:</h3>

                <div class="hydraulics__grid">
                    <div class="hydraulics__card">
                        <h3>Hydraulic Actuators</h3>      
                        <p>We provide expert maintenance and overhaul services for hydraulic actuators, addressing issues such as seal failures, internal leaks, and wear. Our thorough testing and precision repairs ensure reliable operation and extended service life.</p>
                    </div>

                    <div class="hydraulics__card">
                        <h3>Hydraulic System Oil Coolers</h3>      
                        <p>Our team specializes in cleaning, inspection, and repair of hydraulic system oil coolers, rectifying issues like blockages, corrosion, and heat transfer inefficiencies. We help your aircraft maintain optimal fluid temperature in your hydraulic system to ensure peak operational performance.</p>
                    </div>

                    <div class="hydraulics__card">
                        <h3>Engine-Driven Pumps</h3>      
                        <p>We deliver comprehensive services for engine-driven pumps, diagnosing and resolving issues like pressure loss, cavitation, noisy operation, and mechanical wear. Each pump is rigorously tested to ensure it meets or exceeds the highest performance for your aircrafts critical demand.</p>
                    </div>

                    <div class="hydraulics__card">
                        <h3>Hydraulic Control Valve Modules</h3>      
                        <p>Our technicians repair and overhaul hydraulic control valve modules with flawless precision, addressing internal leaks, pressure variances, Electrohydraulic Servo Valve discrepancies, Control Valve Hysteresis response, and Solenoid faults. With precise calibration and testing, we restore these critical components to ensure robust hydraulic system operation.</p>
                    </div>
                </div>
                
                <div class="hydraulics__footer">
                    <p>Aeropol’s Mechanical Systems MRO services prioritize the safety, efficiency, and reliability of your fleet’s hydraulic system operations. With an emphasis on reducing costs while meeting regulatory standards, our services support seamless and optimized performance for your aircraft so you can fly longer.</p>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/cta-blog' ); ?>

        <section class="electrical" id="electrical">
            <div class="electrical__row-1">
                <h2>Electrical Systems: Aviation MRO Services</h2>    
            
                <p>Aeropol offers dedicated Electrical Systems MRO as part of our aviation maintenance services, supporting aircraft electrical systems with expert repair, overhaul, and preventive maintenance. Our team specializes in solutions for complex electrical systems, ensuring every component operates at peak capacity to enhance safety, reliability, and efficiency.</p>

                <div class="electrical__photo-grid">
                    <img src="/wp-content/uploads/2024/12/Electrical1.jpg" alt="Electrical System">
                    <img src="/wp-content/uploads/2024/12/Electrical2.jpg" alt="Electrical System">
                </div>
            </div>

            <div class="electrical__row-2">
                <h3>Among Our Electrical Component MRO Services Include:</h3>

                <div class="electrical__grid">
                    <div class="electrical__card">
                        <h3>Horizontal Stabilizer Actuators</h3>      
                        <p>We deliver specialized knowledge in the operation and maintenance of horizontal stabilizer actuators, addressing issues such as motor wear, electrical fault isolation, and gear assembly degradation. Our precise calibration ensures smooth and reliable operation for critical flight control systems. </p>
                    </div>

                    <div class="electrical__card">
                        <h3>Linear & Rotary Actuators</h3>      
                        <p>Our team provides comprehensive diagnostics and repair services for linear and rotary actuators, resolving issues like motor failures, signal interruptions, and mechanical wear. We restore these components to peak performance to ensure accurate travel and indication.</p>
                    </div>

                    <div class="electrical__card">
                        <h3>Flap Power Drive Units</h3>      
                        <p>We offer expert maintenance for flap power drive units, focusing on troubleshooting power delivery issues, restoring electrical integrity, and repairing mechanical components. Our work ensures consistent and reliable flap operation during take-off and landing.</p>
                    </div>

                    <div class="electrical__card">
                        <h3>Electrical Harness Inspection</h3>      
                        <p>Our harness services include detailed inspection, continuity testing, repairs to address damaged wiring, faulty connectors, or insulation related issues. We ensure robust and reliable electrical interface connections that are critical to the aircrafts electrical systems.</p>
                    </div>
                </div>
                
                <div class="electrical__footer">
                    <p>Our Electrical Systems MRO services are tailored to ensure consistent and reliable electrical performance across your fleet. With a focus on compliance and reducing downtime, Aeropol is dedicated to supporting your fleet’s electrical requirements to ensure optimal efficiency.</p>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/cta' ); ?>

        <section class="mechanical" id="mechanical">
            <div class="mechanical__row-1">
                <h2>Mechanical Systems: Aviation MRO Services</h2>    
            
                <p>Aeropol’s Mechanical Systems MRO services are designed to keep your fleet’s mechanical systems performing with reliability, ensuring every part operates efficiently to meet the high standards in aviation. Our technicians have extensive experience in maintaining, repairing, and overhauling mechanical systems with a focus on durability, compliance to minimize service interruptions.</p>

                <div class="mechanical__photo-grid">
                    <img src="/wp-content/uploads/2024/12/Mechanical1-1.jpg" alt="Mechanical System">
                    <img src="/wp-content/uploads/2024/12/Mechanical2-1.jpg" alt="Mechanical System">
                </div>
            </div>

            <div class="mechanical__row-2">
                <h3>Among Our Mechanical Component MRO Services Include:</h3>

                <div class="mechanical__grid">
                    <div class="mechanical__card">
                        <h3>Flap Ball Screw Actuators</h3>      
                        <p>We provide meticulous maintenance and repair services for flap ball screw actuators, addressing issues such as ball and screw wear, excessive end play, lubrication deficiencies, and proper gimbal modulation. Our attention to precision during the assembly and testing process ensure smooth and reliable flap actuations for your aircraft.</p>
                    </div>

                    <div class="mechanical__card">
                        <h3>Asymmetric Flap Brake Control Units</h3>      
                        <p>Our team specializes in the maintenance of asymmetric flap brake control units, resolving issues like internal wear, clutch slippage, solenoid response timing, and intermittent operational performance. We ensure robust asymmetric brake operation during the extension and retraction of your aircraft’s flaps.</p>
                    </div>

                    <div class="mechanical__card">
                        <h3>Gearbox Assemblies</h3>      
                        <p>We deliver comprehensive diagnostics, repairs, and rebuilds for gearbox assemblies, focusing on resolving gear wear, bearing failures, and lubrication related issues. Our precision workmanship guarantee’s optimal power transmission, durability, and reliability whether in flight or on ground.</p>
                    </div>
                </div>
                
                <div class="mechanical__footer">
                    <p>Understanding the critical mandates mechanical systems require to deliver flawless operational safety and performance is one of our specialties. Our mechanical system MRO services are designed to optimize reliability, reduce maintenance costs, keep your aircraft flying longer by delivering our highest quality standard of excellence. Trust our aviation services to enhance the efficiency of your fleet and minimize downtime in your mechanical maintenance.</p>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/cta-blog' ); ?>

        <section class="fuel-system" id="fuel-system">
            <div class="fuel-system__row-1">
                <h2>Fuel Systems: Aviation MRO Services</h2>    
            
                <p>As part of our expert aviation MRO services, we provide comprehensive Fuel Systems MRO to keep your aircraft performing at its best. Our skilled technicians have extensive experience in aviation fuel system maintenance, repair, and overhaul, offering solutions tailored to your fleet’s unique needs. With a focus on safety, compliance, and efficiency, we help ensure your aircraft are ready for takeoff with minimal downtime.</p>

                <div class="fuel-system__photo-grid">
                    <img src="/wp-content/uploads/2024/12/fuel-sys1.jpg" alt="Fuel System">
                    <img src="/wp-content/uploads/2024/12/fuel-sys2.jpg" alt="Fuel System">
                </div>
            </div>

            <div class="fuel-system__row-2">
                <h3>Among Our Fuel Component MRO Services Include:</h3>

                <div class="fuel-system__grid">
                    <div class="fuel-system__card">
                        <h3>Fuel Metering & Acceleration Manifolds</h3>      
                        <p>We specialize in the maintenance and repair of fuel metering and acceleration manifolds, addressing issues like flow inconsistencies, wear, and contamination. Our precision work ensures accurate fuel delivery and optimal engine performance.</p>
                    </div>

                    <div class="fuel-system__card">
                        <h3>Re-Fuel & De-Fuel Manifolds</h3>      
                        <p>Our team provides expert servicing for re-fuel and de-fuel manifolds, resolving issues such as seal degradation, flow restrictions, and pressure control malfunctions. We restore these systems to ensure safe and efficient fueling operations.</p>
                    </div>

                    <div class="fuel-system__card">
                        <h3>Fuel Tank Relief Valves</h3>      
                        <p>We inspect, repair, and calibrate fuel tank relief valves to address leaks, pressure regulation issues, pressure differential, and mechanical wear. Each valve is rigorously tested to ensure safety, reliability, and compliance with performance standards.</p>
                    </div>

                    <div class="fuel-system__card">
                        <h3>Fuel System Boost Pumps</h3>      
                        <p>Our services for fuel boost pumps include diagnostics, repair, and performance testing to resolve issues like cavitation, motor failures, impeller wear, and suction flow. We restore pumps to ensure consistent and efficient fuel flow to deliver proper fuel metering to the engines.</p>
                    </div>
                </div>
                
                <div class="fuel-system__footer">
                    <p>We understand the critical role fuel systems play in aviation safety and performance. Our aviation MRO services are designed to optimize fuel system reliability, reduce operational costs, and keep your aircraft compliant with the latest regulations. Trust our aviation services to enhance the efficiency of your fleet and minimize downtime, all while ensuring the highest standards of safety and performance.</p>
                </div>
            </div>
        </section>

    </div> <!-- .ast-container -->
</main>

<?php get_footer(); ?>