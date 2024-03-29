<!DOCTYPE html>
<html lang="en">

<?php $page = "research"; ?>
<?php require_once "header.php"; ?>

<body>

    <?php require_once "nav.php"; ?>

    <main class='container-fluid mt-5 pb-5 pl-md-5 pr-md-5'>

        <div class="mt-5 mb-3 clearfix">
            <h2>Research</h2>
        </div>
        
        <div class="mt-3 clearfix">
            <h3 class="mt-2 mb-3 clearfix">Magic-Angle Twisted Bilayer Graphene</h3>
            <p>
                When two sheets of monolayer <a href="http://en.wikipedia.org/wiki/Graphene" target="_blank">graphene</a> are rotated relative to one another, a <a href="https://en.wikipedia.org/wiki/Moiré_pattern" target="_blank">moiré pattern</a> emerges (see image below). At a twist angle of 1.1°, the newly formed periodicity greatly modifies the electronic properties of the graphene sheets, giving rise to superconductivity, correlated insulators, and magnetic behavior. We worked on understanding these exotic phases of matter in twisted bilayer graphene by measuring its electronic excitation spectrum as a function of energy and electron density.
            </p>
            <div style="text-align: center">
                <img src="images/moire.png" style="width:400px" />
            </div>
            <br>
            <p>
                See <a href="https://www.nature.com/articles/s41586-020-2339-0" target="_blank"><i>Nature</i> <b>582</b>, 198-202 (2020)</a>, <a href="https://www.nature.com/articles/s41586-020-3028-8" target="_blank"><i>Nature</i> <b>588</b>, 610-615 (2020)</a>, <a href="https://www.nature.com/articles/s41586-021-04121-x" target="_blank"><i>Nature</i> <b>600</b>, 240-245 (2021)</a>, <a href="https://www.nature.com/articles/s41586-023-06226-x" target="_blank"><i>Nature</i> <b>620</b>, 525-532 (2023)</a>, and <a href="http://journals.aps.org/prb/abstract/10.1103/PhysRevB.92.155409" target="_blank"><i>Physical Review B</i> <b>92</b>, 155409 (2015)</a> for our work on twisted bilayer graphene.
            </p>

        </div>

        <div class="mt-3 clearfix">
            <h3 class="mt-2 mb-3 clearfix">Engineering Electric Potentials in Graphene</h3>
            <p>
                Electrons in monolayer graphene move as though they are relativistic massless particles that obey the two-dimensional (2D) <a href="https://en.wikipedia.org/wiki/Dirac_equation" target="_blank">Dirac equation</a>. Thus, graphene provides an excellent simulator for the physics of high-energy electrons. By manipulating charged defects, we created various electrostatic potentials (such as the Coulomb potential and the harmonic-oscillator potential) in graphene and imaged the resulting electronic wavefunctions. Here is a density-of-states image of a standing wave of electrons confined in graphene:
            </p>
            <div style="text-align: center">
                <img src="images/graphene_qdot.jpg" style="width:400px" />
            </div>
            <br>
            <p>
                See <a href="https://www.nature.com/articles/nphys3805" target="_blank"><i>Nature Physics</i> <b>12</b>, 1032-1036 (2016)</a> and <a href="https://www.science.org/doi/10.1126/science.1234320" target="_blank"><i>Science</i> <b>340</b>, 734-737 (2013)</a> for our work on controlling and imaging Dirac fermions in graphene.
            </p>

        </div>

        <div class="mt-3 clearfix">
            <h3 class="mt-2 mb-3 clearfix">Quantum Spin Hall States in 1T'-WTe<sub>2</sub> and 1T'-WSe<sub>2</sub></h3>
            <p>
                A <a href="https://en.wikipedia.org/wiki/Topological_insulator" target="_blank">topological insulator</a> is a material that is insulating in its interior but conductive on its boundary. In two dimensions, this implies dissipationless current-carrying edges that are robust against disorder. We studied the <a href="https://en.wikipedia.org/wiki/Quantum_spin_Hall_effect" target="_blank">Quantum spin Hall</a> edge states of <a href="https://en.wikipedia.org/wiki/Transition_metal_dichalcogenide_monolayers" target="_blank">transition-metal dichalcogenides</a> 1T'-WTe<sub>2</sub> and 1T'-WSe<sub>2</sub>. Below is a conductance map of a 1T'-WSe<sub>2</sub> domain showing enhanced density of states at its edges.
            </p>
            <div style="text-align: center">
                <img src="images/wse2_domain.png" style="width:400px" />
            </div>
            <br>
            <p>
                See <a href="https://www.nature.com/articles/nphys4174" target="_blank"><i>Nature Physics</i> <b>13</b>, 683–687 (2017)</a> and <a href="https://www.nature.com/articles/s41467-018-05672-w" target="_blank"><i>Nature Communications</i> <b>9</b>, 3401 (2018)</a> for our work on 1T'-WTe<sub>2</sub> and 1T'-WSe<sub>2</sub>.
            </p>

        </div>
        
        <div class="mt-3 clearfix">
            <h3 class="mt-2 mb-3 clearfix">Scanning Tunneling Microscopy</h3>
            <p>
                <a href="http://en.wikipedia.org/wiki/Scanning_tunneling_microscope" target="_blank">Scanning tunneling microscopy (STM)</a> is a powerful tool for characterizing surfaces with atomic-scale resolution. By applying a voltage bias between a conducting tip and a surface, electrons are extracted from or injected into the surface via quantum tunneling. Measuring the tunneling current provides energy-resolved electronic-structure information about the material.  Additionally, STM images can be Fourier transformed to obtain momentum-space data. Here is a <a href="https://www.dropbox.com/s/2otdohvcp5hz22h/ult%20construction%20slow.mp4?dl=0" target="_blank">time-lapse</a> of the construction of our STM.
                <br><br>
                See <a href="https://aip.scitation.org/doi/10.1063/1.5132872" target="_blank"><i>Review of Scientific Instruments</i> <b>91</b>, 023703 (2020)</a> for information about the STM that we built.
            </p>
        </div>
        
    </main>

    <?php require_once "footer.php"; ?>

</body>
</html>