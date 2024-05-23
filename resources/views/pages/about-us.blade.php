@extends('layouts.app')

@section('content')

<section id="about-us">
    <div class="container about-us ">
        <h3>About Us</h3>
        <p>Welcome to Work Hobbit, where remote work becomes a lifestyle. Founded in 2021, Work Hobbit is a pioneering platform that connects talented professionals with remote job opportunities worldwide.</p>
        <p>Our mission is to redefine the traditional work model by empowering individuals to work flexibly, efficiently, and collaboratively from anywhere in the world. With a diverse team of experts spanning various industries, Work Hobbit is committed to fostering innovation, diversity, and inclusivity in the remote work landscape.</p>
        <p>At Work Hobbit, we believe in providing our community with the tools, resources, and support they need to thrive in their remote careers. Whether you're a seasoned professional or just starting your remote work journey, Work Hobbit offers a wide range of opportunities across multiple disciplines.</p>
        <p>Join us in shaping the future of work and unlock your full potential with Work Hobbit. Together, we can build a more flexible, accessible, and inclusive work environment for everyone.</p>
        
     
        
        <h3>Our Awards</h3>
        <div class="awards">

            <div class="container">
                <div class="row">
                    <!-- Awards for 2024 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2024</h5>
                            <div class="award">
                                <img src="{{ asset('images/BPS award.webp') }}" alt="Award 1" style="width: 50px;">
                                <div class="award-text">
                                    <h3>Everest Group BPS (Business Process Services) Top 50</h3>
                                    <p>The Everest Group BPS Top 50 is a global list of the 50 largest third-party providers, based on their BPS revenues and year-on-year growth. WorkHobbit was recognized as #9 on the list.</p>
                                </div>




                            </div>
                            <div class="award">
                                <img src="{{ asset('images/award_image1.webp') }}" alt="Award 1" style="width: 50px;">
                                <div class="award-text">
                                    <h3>IAOP Global Outsourcing 100®</h3>
                                    <p>For the fourth consecutive year, WorkHobbit has been named on The Global Outsourcing 100® list. This list reflects the best outsourcing providers across size and growth, customer references, awards and certifications, programs for innovation and CSR.</p>
                                </div>
                            </div>
                            <!-- Existing award -->
                            <div class="award">
                                <img src="{{ asset('images/AI_Breakthrough_Awards.webp') }}" alt="Award 1" style="width: 50px;">
                                <div class="award-text">
                                    <h3> Everest Group BPS (Business Process Services) Top 50</h3>
                                    <p>WorkHobbit won Best Informational Bot Solution as part of the AI Breakthrough Awards for our Agent Assist Chatbot. These awards recognize the best companies, technologies, products and services in the field of artificial intelligence..</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Awards for 2023 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2023</h5>
                            <div class="award">
                                <img src="{{ asset('images/ICMI-Award.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>Best Learning & Development Program</h3>
                                    <p>WorkHobbit won in the Best Learning and Development Program category at the ICMI Global Contact Center Awards for effectively leveraging training to support better onboarding, improve agent performance, and deliver ongoing coaching and development in a way that elevates both the customer and employee experience. WorkHobbit was also named a finalist in the Best Digital Customer Experience category..</p>
                                </div>
                            </div>
                            <div class="award">
                                <img src="{{ asset('images/2023-CLO-Learning-in-Practice-Award.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>CLO Learning in Practice Awards</h3>
                                    <p>WorkHobbit leadership program to support development and growth was recognized in the 2023 CLO Learning in Practice Awards in the Excellence in Blended Learning category. The awards acknowledge learning leaders who exemplify excellence in crafting and implementing employee development programs and exhibit a unique blend of qualities, including leadership, visionary thinking, business acumen and a strategic alignment that consistently delivers outstanding results</p>
                                </div>
                            </div>
                            <!-- Existing award -->
                            <div class="award">
                                <img src="{{ asset('images/IT-World-Awards_Silver.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>IDC MarketScape: Worldwide Data Labeling Software 2023 Vendor Assessment</h3>
                                    <p>WorkHobbit has been named a "Leader" in the IDC MarketScape: Worldwide Data Labeling Software 2023 Vendor Assessment. This global assessment evaluates vendors offering data labeling software technologies and capabilities, including WorkHobbit International’s proprietary Ground Truth Studios (GT Studios) platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Awards for 2022 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2022</h5>

                            <div class="award">
                                <img src="{{ asset('images/NelsonHall-resized_logo.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3> NelsonHall CX Transformation NEAT</h3>
                                    <p>WorkHobbit was ranked a Leader in the NelsonHall CX Transformation NEAT Assessment in the overall; revenue generation capability; CX improvement capability; and cost optimization capability categories.</p>
                                </div>
                            </div>


                            <div class="award">
                                <img src="{{ asset('images/Global-Outsourcing-100-22.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3> IAOP Global Outsourcing 100</h3>
                                    <p>For the third consecutive year, WorkHobbit has been named on the Global Outsourcing 100 list. This list reflects the best outsourcing providers across size and growth, customer references, awards and certifications, programs for innovation and CSR.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Awards for 2021 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2021</h5>
                            <div class="award">
                                <img src="{{ asset('images/Achievers_50_Engaged.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3> Achievers 50 Most Engaged Workplaces®</h3>
                                    <p>WorkHobbit was named a winner of the 2021 Achievers 50 Most Engaged Workplaces® Award. This prestigious award recognizes top employers who display leadership and innovation in engaging their employees based on the eight elements of employee engagement.</p>
                                </div>
                            </div>
                            <div class="award">
                                <img src="{{ asset('images/FC_2021BestworkplacesInnovator_StandardLogo.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3> Fast Company Best Workplaces for Innovators</h3>
                                    <p>WorkHobbit was named on the Best Workplaces for Innovators International list for 2021 by Fast Company. This prestigious ranking recognizes the top companies globally that are successfully fostering cultures of innovation and empowering employees at all levels to improve processes, create new products, or invent new ways of doing business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Awards for 2020 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2020</h5>
                            <div class="award">
                                <img src="{{ asset('images/Silver-Award-400x300__003_.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>Stevie Awards For Sales & Customer Service</h3>
                                    <p>WorkHobbit received Silver in the Business Intelligence Solution category for Customer Journey Analytics and Silver in the Contact Center or Customer Service Outsourcing Provider of the Year category at the 2020 Stevie Awards for Sales & Customer Service.</p>
                                </div>
                            </div>
                            <div class="award">
                                <img src="{{ asset('images/CX-Awards-Gray-BG.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>CX Awards - Paris</h3>
                                    <p>CCC - powered by WorkHobbit was recognized in the Best Customer Service Strategy category for its partnership with Samsung Electronics. These awards recognize global providers who have developed the most innovative solutions to transform the customer experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Awards for 2019 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2019</h5>
                            <div class="award">
                                <img src="{{ asset('images/IT-World-Awards_Silver.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>IT World Awards</h3>
                                    <p>WorkHobbit received silver in the Business Intelligence and Analytics category for our Data Analytics solution at the 14th annual IT World Awards. This premier awards program honors achievements and recognitions in the IT industry.</p>
                                </div>
                            </div>
                            <div class="award">
                                <img src="{{ asset('images/Excellence-in-Learning-2019.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>Best Advance in Creating a Learning Strategy</h3>
                                    <p>
                                        WorkHobbit won a Brandon Hall Group Gold award for excellence in the “Best Advance in Creating a Learning Strategy” category. The awards program recognizes leading organizations that have successfully deployed programs, strategies, modalities, processes, systems, and tools that have achieved measurable results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Awards for 2018 -->
                    <div class="col-md-4">
                        <div class="award-section">
                            <h5 class="year">2018</h5>
                            <div class="award">
                                <img src="{{ asset('images/Learning-100-2018.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>Learning! 100 Awards</h3>
                                    <p>The Learning! 100 Awards recognize the top organizations for their best-in-class learning and development programs, with learning cultures that create outstanding organizational performance.</p>
                                </div>
                            </div>
                            <div class="award">
                                <img src="{{ asset('images/Recruiters-Awards-2018.webp') }}" alt="Award 2" style="width: 50px;">
                                <div class="award-text">
                                    <h3>Recruiter Awards - Finalist</h3>
                                    <p>
                                        The iconic Recruiter Awards recognize outstanding achievements by agencies and in-house recruiters around the world. WorkHobbit made the shortlist in two categories for 2018: ‘In-house innovation in recruitment’ and ‘Most effective employer brand development.’</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
            


 
        
    </div>
</section>



<section class="section-numbers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Numbers speak for themselves</h2>
                <p>Experience the power of Work Hobbit with our impressive statistics:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="funfact">
                    <div class="funfact-icon"><i class="bi bi-people"></i></div>
                    <div class="funfact-content">
                        <span class="number">235,000</span>
                        <h3 class="funfact-title">Employers</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="funfact">
                    <div class="funfact-icon"><i class="bi bi-currency-dollar"></i></div>
                    <div class="funfact-content">
                        <span class="number">45,000,000</span>
                        <h3 class="funfact-title">Resources</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="funfact">
                    <div class="funfact-icon"><i class="bi bi-person"></i></div>
                    <div class="funfact-content">
                        <span class="number">85,000</span>
                        <h3 class="funfact-title">Active Clients</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="/account/public/register" class="btn btn-primary btn-create-account">Apply Now </a>
            </div>
        </div>
    </div>
</section>

@endsection