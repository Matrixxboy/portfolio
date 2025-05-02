<div class="container px-4 py-8 md:px-10 md:py-12">
  <div class="grid grid-cols-1 md:grid-cols-10 gap-6">

    <!-- Photo Box -->
    <div class="md:col-span-3 glass-white rounded-sm p-4 shadow-lg">
      <div class="grid grid-rows-7 gap-3 h-full">
        <!-- Image -->
        <div class="row-span-6 glass-white rounded flex justify-center items-center shadow-lg overflow-hidden">
          <img src="{{ asset('media/utsav.svg') }}"
               alt="Utsav Lankapati"
               class="w-full h-full object-cover rounded" />
        </div>
        <!-- Name -->
        <div class="row-span-1 glass-white rounded flex justify-center items-center text-center text-2xl md:text-3xl lg:text-4xl font-bold py-2">
          <p>Utsav Lankapati</p>
        </div>
      </div>
    </div>

    <!-- Text + Circles -->
    <div class="md:col-span-7 glass-white rounded-sm p-6 shadow-lg space-y-6 relative">

      <!-- Title -->
      <p class="text-2xl md:text-4xl font-bold text-color-primary mb-2">About me</p>

      <!-- First Paragraph -->
      <div>
        <p class="text-sm md:text-base leading-relaxed text-gray-300">
          Hi, I’m <span class="font-semibold" style="color: #BBAED0;">Utsav Lankapati</span> — a
          <span class="font-medium" style="color: #BBAED0;">curious and creative developer</span> who loves turning ideas into real, working solutions.
          I’ve had the chance to work with a variety of technologies like
          <span class="font-medium" style="color: #BBAED0;">Python, TensorFlow, Keras, OpenCV, Flask, Laravel, Tailwind CSS, MongoDB</span>,
          as well as frontend tools like
          <span class="font-medium" style="color: #BBAED0;">Vanilla JavaScript, React</span>, and
          <span class="font-medium" style="color: #BBAED0;">Laravel Blade</span>.
          Over the years, I’ve built several projects — some for college, some just for fun, and others for clients through freelancing.
          Each one taught me something new and helped me grow as a developer.
        </p>
      </div>

      <!-- Second & Third Paragraph -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
        <div class="md:col-span-2 space-y-4">
          <p class="text-sm md:text-base leading-relaxed text-gray-300">
            One of the highlights of my journey so far has been
            <span class="font-semibold" style="color: #BBAED0;">winning the InnovateX Hackathon</span>, hosted by
            <span class="font-medium" style="color: #BBAED0;">BMCCA</span>.
            It was an amazing experience that pushed my
            <span class="font-medium" style="color: #BBAED0;">creativity and teamwork</span> to the next level.
            I’m always looking to learn more, improve my skills, and build things that actually make a difference —
            whether it’s a small app or a full-scale project.
          </p>

          <p class="text-sm md:text-base leading-relaxed text-gray-300">
            Beyond just coding, I enjoy
            <span class="font-medium" style="color: #BBAED0;">exploring new tech trends</span>,
            working on meaningful side projects, and collaborating with others who share the same
            <span class="font-medium" style="color: #BBAED0;">passion for innovation</span>.
            My goal is to keep learning, keep building, and eventually become a developer who not only writes great code
            but also brings <span class="font-semibold" style="color: #BBAED0;">real value</span> to people through technology.
          </p>
        </div>

        <!-- Circles -->
        <div class="relative w-full h-48 md:h-64">
          <!-- Big Circle -->
          <div class="absolute bottom-0 left-0 w-32 h-32 bg-color-primary rounded-full z-10"></div>
          <!-- Small Circle -->
          <div class="absolute bottom-20 left-12 w-20 h-20 bg-[#442B59] rounded-full z-20"></div>
        </div>
      </div>

    </div>
  </div>
</div>
