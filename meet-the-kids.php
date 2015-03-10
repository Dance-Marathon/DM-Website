<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Meet The Kids | Family | Florida Dance Marathon';
	$GLOBALS['parent'] = 'family';
	include("includes/head.php");
	include("includes/navbar.php");

    $kids = array(
        array(
            'name' => 'Alison J.',
            'description' => 'When Alison was 22 months old, she fell two stories out of a window and fractured her skull. She was rushed to the hospital where she had emergency brain surgery. She was put into a medically induced coma, and her parents were told that she might not make it through the night.  When she awoke, doctors  found more complications in her brain and had to perform another surgery. It has been a long road, but Alison has made a full recovery and is now an active 12 year old.',
            'image' => 'Allison',
            ),
        array(
            'name'  => 'Alyssa M.',
            'description' => 'Alyssa was born 3 1/2 months early (26 weeks) and weighed only 1 pound 4 ounces. this was 16 years ago. We were told she would not make it through the first night. She remained in the hospital, and she received a G-tube when she was two months old. When Alyssa was three months old, she received her first shunt to drain excessive cerebrospinal fluid from her brain. She was released from the hospital but returned just two weeks later.  Since then she has battled shunt malfunctions and episodes where her stomach just stops working.Alyssa has been hospitalized multiple times for anywhere from two days to 10 months.  She has spent more than half of her life in the hospital. Today, Alyssa is 16 years old. Though she is deaf and has cerebral palsy, gastric reflux and delayed speech, she is always smiling.  You only need to send a minute with her to realize how special she is.',
            'image' => 'Alyssa',
            ),
        array(
            'name'  => 'Anna Rose',
            'description' => 'Anna Rose got sick on Jun. 2, 2013. Her family took her to Arnold Palmer Hospital, and she was transported to UF Health Shands Children’s Hospital a couple days later. Anna was in heart failure.She was tested for a possible heart transplant in Feb. 2013 and received her new heart on Mar. 2, 2014. She left the hospital on Mar. 28, 2014.  Anna calls her new heart Prince Toby even though she doesn’t  know anything about her donor.',
            'image' => 'Anna Rose',
            ),
        array(
            'name'  => 'Ava M.',
            'description' => 'In Oct. 2010, Ava, 8 yrs old, had unexplained swollen lymph nodes in her neck. Doctors treated her with Prednisone, an anti-leukemic medication that made her lymph nodes shrink.  Her second visit had inconclusive results, and she was told she didn’t need a follow-up appointment.  Ava’s lymph nodes grew even larger in Dec., so she went to UF Health Shands Children’s Hospital.  She had a biopsy on Dec. 23 and was diagnosed with T-cell Lymphoblastic Lymphoma.  Her central line infus-aport was surgically implanted the morning of Dec. 24th along with her first IT chemo and bone marrow aspiration. Her  diagnosis was  high risk, stage 4 Non-Hodgkins T-Cell Lymphoblastic Lymphoma. Ava responded to treatment very well. Day 29, the last day in her first phase of treatment, showed no detectable cancer cells in her bone marrow. Ava  continues to shine through all of this. Her treatment time is 2.5 years, and her  prognosis is very good.',
            'image' => 'Ava',
            ),
        array(
            'name' => 'Ayden M.',
            'description' => 'On January 7, 2013, Ayden woke up early screaming that he didn’t feel well. He had a high fever, so his mother tried to cool him off in the shower, but he just lay there screaming and convulsing for a few minutes. When he woke up he continued staring off. He was unresponsive, and he could not walk or talk. His mother took him to MRMC where he got a CT scan. The doctors said he had fluid on his brain, so he was  taken to UF Health Shands Children’s Hospital. After an emergency MRI, the doctors discovered a large mass tumor connected to his central nervous system and cluster tumors in his optic pathways. Ayden immediately went into emergency brain surgery to place shunts in the outer cavity of his skull to drain  the fluid out of his head and down into his stomach. Doctors later found a cancerous tumor on his heart. After a year and a half of chemotherapy treatment,  Ayden is completely blind from the pressure of the tumor on his brain and optic nerves. He has undergone a total of 17 surgeries, and doctors have deemed him stable.  Ayden’s family is moving to St Augustine where he  will attend the Florida Blind and Deaf School. Life changed completely for Ayden and his family after his diagnosis, but because of donations to Dance Marathon, he is receives top-quality care and treatment at UF Health Shands Children’s Hospital.',
            'image' => 'Ayden',
            ),
        array(
            'name'  => 'Camden A.',
            'description' => ' Camden was born in June 2011 with a severe form of congenital heart disease called Tetralogy of Fallot with Pulmonary Atresia. He also has  DiGeorge Syndrome, a chromosomal micro-deletion of his 22nd chromosome. When Camden was a year and a half old, his parents decided to move back to Washington where rest of their family lived.  One day on the road trip, he  developed a high fever, so his parents took him to the local emergency room. When the Children’s Hospital of Orange County transport team arrived to take better care of Camden, they realized how seriously ill he was. He went into cardiac arrest, and it took five minutes to revive him. . Upon arriving to the CHOC, Camden was rushed to the Cardiac ICU. The cardiothoracic surgeon told Camden’s parents that his heart was in an advanced stage of heart failure. She recommended placing Camden on ECMO (Extra Corporeal Membrane Oxygenation), which is one of the most advanced forms of life support available today. This was the first time we were ever seriously told that we should be prepared for Camden to pass. About an hour after he was placed on ECMO, his heart experienced a potentially fatal arrhythmia. That’s when doctors decided Camden needed a heart and lung transplant.  After being on ECMO for five days, Camden developed an abdominal bleed and needed emergency surgery. The surgery was risky, but he pushed through. Camden’s parents then decided to move back to Florida, where the doctors knew him well and could make a better case to present to the trasplant committee. The next several months at UF Health Shands Children’s Hospital  included extensive rehab therapy. After five long months at the hospital including 52 days of intubation, Camden was finally able to go home.  He  spent the rest of 2013 in and out of the hospital, and in January 2014 he became very sick. Camden was falling fast, and he had become dependant on the IV drug milrinone.  In  March2014 his parents brought him home with hospice care in place.  After four months, Camden began to wean off of his milrinone drip, and on Oct. 29, 2014, after 285 days on milrinone, his cardiologist turned off his infusion pump.  Camden has endured two major open heart surgeries, two abdominal surgeries, three general surgeries and five heart catheterizations. He is now three and a half years old.',
            'image' => 'Camden',
            ),
        array(
            'name'  => 'Catherine M.',
            'description' => 'Catherine was diagnosed with Juvenile Idiopathic Arthritis when she was six years old. When she first got sick, her parents thought it was the flu, but she kept getting worse. . She  was in the hospital for weeks because the doctors had trouble diagnosing her. . During the first few years, she was sore, tired and taking a lot of different medications.  Over  the past few years, her arthritis has been under control, and she has been in remission, , but there have been periods of time when her  arthritis has flared and caused other complications. In third and ninth grade, Catherine experienced very painful buildups of fluid in her chest.  She has since gotten her arthritis back under control and is living a normal teenage life.',
            'image' => 'Catherine M',
            ),
        array(
            'name'  => 'Catriona C.',
            'description' => 'Catriona was diagnosed with asthma before she was even six months old.  Just before her fourth birthday, she  passed out after running into a store in the rain. She  was sent to Joe DiMaggio Children’s Hospital where she learned that she had a rare and life-threatening condition called Primary Pulmonary Hypertension. Her doctor placed her on experimental medicine for about a year.  Catriona went to UF Health Shands Children’s Hospital and received new medication that pumped directly into her heart.  When she was almost seven, her heart was not doing well, so she was admitted into the  Shands PICU to wait for a heart/lung transplant. She spent 345 days there and got her heart/lung transplant just after her eighth birthday. Catriona’s white blood cell count is low so, she is enrolled in do K12 Florida Virtual school at home.',
            'image' => 'Catriona',
            ),
        array(
            'name'  => 'Geoffrey P.',
            'description' => 'We’ve been attending Dance Marathon for 7 years now! It’s been a

wonderful event yearly. And we’ve had some amazing opportunities

through DM.

Geoff was diagnosed with leukemia when he was 4 months old. He

went through 1 year of chemotherapy at Shands and has been in

remission since then.

When he was 10 months he was diagnosed with a hearing loss not

related to his cancer or chemotherapy. He was fitted with hearing

aids at 12 months old. His hearing progressed to profound hearing

loss and when he was 5 years old he got a cochlear implant at Shands.

Geoff is a great kid and loves to read. He’s doing well in school and

just finished taking his 3rd grade FCAT. He loves his baby brother,

Legos, running, basketball, and the Florida Gators!',
            'image' => 'Geoffery',
            ),
        array(
            'name'  => 'Hyla M.',
            'description' => 'Some of you may have heard my story before, but for those of you who haven’t my

name is Hyla Marlin, I am 10 years old and in 4th grade. So about 6 years ago, I was diagnosed Wilms

Tumor – it’s a type of kidney cancer. I was in New York at a family camp, that’s when my mom and dad

realized one side of my belly was puffed up, and they took me to a doctor. The doctor said that I had kidney

cancer in my left kidney so the next day they flew me to Shand’s Hospital. A couple of days later, I had a

biopsy surgery and then began 9 months of treatment. They had to remove my left kidney and I got chemo,

radiation. Then I went back to my home in Belize, Central America. But one year later, the cancer came

back in my lungs. I had 9 more months of treatment - I got chemo, radiation and stem cell transplant. It

wasn’t very fun. But I loved my doctors, nurses and volunteers. And so many people provided stuff to make

it nicer, like child-size equipment for taking my blood pressure, movies and games, because it is really

boring being in the hospital all of the time. I love Dance Marathon – they have been so supportive of

children like me. And by the way, this past June, I was 3 years cancer free. Thank you for supporting Dance

Marathon and all of the other childhood cancer organizations. Cancer sucks.',
            'image' => 'Hyla',
            ),
        array(
            'name'  => 'Izabella N.',
            'description' => 'Izabella and her twin sister, Jesubelle, were born 3 months premature at Memorial West Hospital in South Florida. At 3 weeks old Izabella had a pulmonary hemorrhage (she bled out from her lungs) which nearly took her life. She was transferred to Joe Dimaggio where she was stabilized and at almost five months old she was diagnosed with an extremely rare disease, so rare that it doesn’t have a name yet. Basically her lungs didn’t work and her only cure or chance at life would be a lung transplant. Two years ago in May we were transferred to Shands Hospital to receive that lung transplant. She was placed on the waiting list and we waited nine months for the call. Doctors never thought she would make it. Her transplant was performed on January 27, 2013 and she was discharged for the first time in her life on March 20th. She has been in and out of the hospital many times since, but continues to amaze doctors with her will to fight for life. CMN has been a great part of our lives in and out of the hospital. Many of the machines used on a daily basis to save Izabella’s life while she was on life support were donated by CMN or by their DM event held each year. DM and CMN have given our kids the opportunity to be "normal"kids outside of the hospital. From the Sweet Dreams event to the FTKarnival Kick off event to Dance Marathon and many other events held by DM and CMN, my kids have enjoyed being surrounded by the young individuals dedicating their lives to helping children like mine.',
            'image' => 'Izabella',
            ),array(
            'name'  => 'Jack M.',
            'description' => 'Jack was born on June 2, 2001 in Tallahassee Florida.  He is one of 5 children, the only boy, with one older sister and 3 younger.  In May of 2012 when he was an 11 year old 6th grader, he was diagnosed with AML (Acute Myeloid Leukemia).    When his bloodwork came back not as mono but Leukemia our pediatrician told us to take him that very day to see Dr. Slayton at Shands Children’s Hospital.

Our first few days were a blur of tests and meetings as they worked to define exactly what type and subtype of leukemia he had.  We learned that instead of the more common ALL he had AML.  We also learned that it was in his spinal fluid as well.  The treatment for Jack’s AML was 4 consecutive rounds of chemotherapy.  They told us that he would likely be at Shands for 6 months and that it would be unlikely that he could go home at all during that time.

And so we became a family divided, with one parent at home with his sisters and one at the hospital from May until the end of October.   Jack celebrated his 12th birthday in the awesome game room in 42 Peds with visiting friends, pizza, cookie cake and games.  As the treatment continued visits like that would become less possible as he suffered the side effects and other illnesses that come with so much chemo and such a fragile immune system.  He was able to keep in touch with some of his friends through xbox live and a several sets of headsets!

Through it all Jack was amazing.  He defied the odds and we were able to bring him home for a couple of days in between some of the rounds!  How grateful we were to all be together and know that he was asleep in his own bed!  He always told the doctors, nurses and his parents exactly what was on his mind.  He didn’t complain (much), not nearly as much as he should have!  His distinctive sense of humor and practical jokes were a joy and we are so proud of him for holding on to that during his treatment!  (Ask him about his trip to the PICU and the monitors sometime, or the remote control spider!).

Jack is our HERO.

Our prayers were answered when we brought him home and we thank God every day for his remission!  We also thank God for the amazing doctors, nurses, volunteers, social workers, and everyone else who devotes so much of their lives to making it possible for kids like Jack to not only SURVIVE, but to have some comfort during that time!  The funds raised by CMN make such a huge difference in the level of care available for these kids!  What a difference it makes to know you have available the best and brightest and most dedicated doctors and nurses, the latest drugs and therapies, all of the support staff imaginable to help the kids and their families get through times like these!  And to the Dance Marathon kids, you ROCK!  It is not just about fundraising, it’s also how you make all of our kids feel special and loved, and we thank you for all that you do FTK!
',
            'image' => 'Jack M',
            ),
        array(
            'name' => 'Jake C.',
            'description' => 'My name is Jake and I am 13 years old and
in 7th grade. My leg hurt for a few months and Mom took me to the doctor. I found out this week that I
have Ewings Sarcoma in my fibula. The good news is that they can treat this and they can just take out
that bone because I don’t need it. I am going to Shand’s in Gainseville, Florida. It is too bad I have to go to
Gator country for treatment but the doctors are great there. I am sad about missing my track season,
soccer season, baseball season and unicycle club. I also can’t beleive I am saying this but I am really
going to miss school and my teachers. Thank you for following my journey of recovery
',
            'image' => 'Jake C',
            ),
        array(
            'name'  => 'Kaedyn B.',
            'description' => 'Kaedyn B. is the five year old son of Nic & Shelsie who was diagnosed with A.L. Leukemia on Fridaythe
13, 2010. Kaedyn was born on September 22, 2009. He was over 8lbs in the 98th percentile in growth
stats and looked to be the picture of newborn health. Kaedyn did many things early. Walking at nine
months and scrambling to run in the last few weeks as he tried to keep up with his brother Kaleb (his
hero) were things he tackled with spunk and determination.

Two and half weeks before Kaedyn was checked in at UF Health, Shelsie took him to see his
pediatrician because his cheeks were a little swollen. After a quick visit, Kaedyn was diagnosed with
the mumps. A week later, his symptoms continued to worsen to include continued swelling in the
cheeks and obvious pain in his stomach so Shelsie and Nic brought him to the E.R. They were then
told that he was just experiencing the effects of mumps and were directed to take him home being
sure to keep him in isolation. On Thursday night in the wee hours, his pain grew excruciating so he
was again rushed to the E.R. where finally, doctors finally diagnosed him with leukemia and he was
rushed to UF Health Shands Children’s Hospital.

Blood tests confirmed that Kaedyn indeed has Acute lymphoblastic leukemia (ALL) which is a cancer of the white blood cells, the cells in the body that normally fight infections. Kaedyn finished his treatment on August 14, 2013. In
just 4 months after treatment ended his cancer returned. His best chance at a cure was a Bone Marrow Transplant. He spent 4 months in the hospital with only a weekend break. He needed chemotherapy and radiation to get his
cancer back under control. It was a very rough patch with multiple infections and him not being allowed out of his room. When his cancer was in remission once again he received his Bone Marrow Transplant on March 22, 2013.
A month after his new cells entered his bloodstream he left the hospital and to this day has not been admitted.
He is doing fantastic and is truly a little miracle child.
',
            'image' => 'Kaedyn B',
            ),
            array(
            'name' => 'Kalee E.',
            'description' => 'Hi, my name is Kalee. I’m 19 years old and have been treated at Shand’s for over three years now.  I was transferred to Shand’s in 2011 when I was diagnosed with a slew of autoimmune and neurological related disorders including- Crohn’s Disease, Celiac Disease, Behcet’s Disease, Pain Amplification Syndrome, Anemia, Chronic B12 Defiency, Mitral Valve Prolapse, and Enthesitis Related Arthritis.  My one doctor refers to it as a having a “cancerous” immune system.  I am treated with immunosuppressant infusion therapies, steroid injections, and small doses of chemo I receive in variation every couple weeks.   On top of regular procedures, I am also placed on a full liquid diet or feeding tube and dozens of medications to keep things in line.  Thanks to the support I have received at UF Health at Shand’s, I am now a premed college student at the University of Florida hoping to one day make an impact similar to the one my doctors had on my life.
',
            'image' => 'Kalee E',
            ),
            array(
            'name' => 'Kasey V.',
            'description' => 'Kasey is a 6-year cancer survivor. She was diagnosed with Neuroblastoma when she
was 9 months old. She had many surgeries. She also had 9 rounds of chemotherapy. Each time she had
chemo she had to stay at the hospital due to her age. Kasey is a strong little girl and loves life to the fullest.

',
            'image' => 'Kasey',
            ),
            array(
            'name' => 'Kendall L.',
            'description' => '"Miss K" was born on June 2, 2011 by a  planned repeat C-Section. We knew of none of her issues prior to her birth. Within the first few hours, it was determined that she had VACTERL Association. This is an acronym that represents a number of things. (V=Vertebrae or Spinal issues) She has a wedge shaped L4. (A=Anal) She had a low imperforated anus, basically meaning she was born without an anal opening. (C=Cardiac) She has Tetralogy of Fallot with Pulmonary Atresia, TOF/PA. (T=Trachea) She had a Fistula with tracheoesophageal. (E=Esophageal) Esophageal Atresia. Simply put, she had an abnormal connection between her trachea and her esophagus and her esophagus wasn’t attached to her stomach. (R=Renal) She has Hydronephrosis with a duplicated collection system and stage II kidney reflux on her Right Kidney. (L=Limb----> simply put, some people can/will be missing odd bones in their body for no reason. This is the only component of this that she doesn’t have). In addition to these issues, she also has Pulmonary Complications. Shands at UF has been our home away from home since Day 1. She was transported there from Munroe Regional and stayed at Shands the first 7 weeks of her life. She had her first set of surgeries on Day 5 and her first Open Heart Surgery when she was 26 days old. We are followed by 6 Pediatric Specialties (Cardiology, Pulmonary, Pediatric Surgery, GI, Nephrology, & ENT). In August, we are preparing for heart surgery #2. We have nothing but love for our pediatric department here at Shands and everything they have done for us',
            'image' => 'Kendall',
            ),
            array(
            'name' => 'Madison G.',
            'description' => 'Madison was just two years old when she came to UF Health Shands Children’s Hospital. Since being diagnosed with a Wilms Tumor in her right kidney, she has undergone surgery and experienced many hospital visits during treatment for this rare form of cancer. Madison has recovered beautifully and she is almost five years cancer free! Her mother Ashley describes their last day in the pediatric infusion room as a celebration, where Madison’s nurses gave her a trophy that she still keeps by her bed. For her parents, UF Health Shands Children’s Hospital was a no-brainer as it is where Madison’s aunt, Dr. Shelley Collins, is a pediatric doctor. Her mom reflects on being in the hospital for five days and many chemo treatments with a two year old, mentioning “the toys, games, movies and playful distractions that CMN provides the children are vital to getting through the long days.” Amazingly, the Greene family says the most positive outcome has been becoming more active in organizations, like CMN, that help ill children and their families.',
            'image' => 'Madison',
            ),
            array(
            'name' => 'Mason H.',
            'description' => 'Mason was born at Shands with a congenital heart defect, Transposition of Great Arteries. He is a CMN Ambassador and loves participating in Dance Marathons. He is a true Gator fan and we look forward to going to the one at UF. Thanks for all that you do for such a great cause!',
            'image' => 'Mason',
            ),
            array(
            'name' => 'Matthew L.',
            'description' => 'Matthew was picked up by ambulance and then airlifted by the ShandsCair helicopter from Spring Ridge after suffering a brain aneurysm. A brain aneurysm is a ballooning-out of the wall of an artery in the brain. Often this wall is weakened by disease, injury or an abnormality present at birth. They aren’t always life threatening, but serious consequences — such as a stroke — can result if one bursts in the brain. He was treated in the PICU at Shands Children’s Hospital at UF from June 15 to July 13. He has recovered amazingly and will be returning to school this week.',
            'image' => 'Matthew L',
            ),
            array(
            'name' => 'Michael S.',
            'description' => 'Michael was originally diagnosed with a brain tumor when he was 2 years old. For 2 years, he underwent a series of MRIs to monitor his tumor. Just after he turned 4, they noticed some changes to the tumor. At that time, he ended up having 2 biopsies on his brain. Unfortunately, it was determined that the tumor was unable to be removed so he was referred to an oncologist to see about a chemotherapy regime. He underwent a year of chemotherapy. During that time, he had several hospital stays due to infection. He was always very brave and never complained. We were so grateful to have toys, games, movies, arts and crafts projects to occupy his time. These were all purchased by Children’s Miracle Network. On top of this, Michael also has a diagnosis of autism. He has been in speech, occupational and physical therapy since he was 18 months old due to the effects of his tumor and autism. He has recently learned to ride his bike and gets joy from bike riding and playing soccer with TOPS soccer. We are so proud of his accomplishments and appreciate the great care he received at Shands Hospital for Children in Gainesville. He still undergoes yearly MRIs and his doctors are very pleased with his progress.',
            'image' => 'Michael S',
            ),
            array(
            'name' => 'Miranda L.',
            'description' => 'Miranda was born dead, resuscitated, died again, resuscitated again - pronounced terminal, put on life support and sent to Shands. She had aspirated fluid because of a difficult birth and her tiny body shut down. She had no muscle tone and she responded to nothing - not even the many IV’s that were placed in her hands, her feet and her head. They said she would never leave the hospital, but she grew stronger and stronger - and to everyone’s astonishment - she was able to come home. Her quality of life was still in question because she had brain damage and she also had a birth defect called craniosynostosis. She would have a very "challenging" 12 years, filled with 3 major skull surgeries, 9 eye surgeries, 3 blood transfusions, 3 years of physical therapy and 4 very difficult years of school. Miranda has overcome every obstacle and has become an amazing teenager who is in advanced classes and on the A/B honor Roll.',
            'image' => 'Miranda L',
            ),
            array(
            'name' => 'Nathan F.',
            'description' => 'Nathan was born seemingly healthy, but we quickly realized his health was in jeopardy when he was first hospitalized at 2 weeks old for respiratory distress symptoms. During his first few months of life, we realized our son was struggling with low muscle tone (hypotonia), gastrointestinal dysmotility, immune deficiency, liver dysfunction, respiratory difficulties, and metabolic changes. Every couple of months of his life seemed to add another specialist who helped unravel the cause of the mutli-system difficulties in Nathan’s body. Testing performed from a surgical muscle biopsy when he was a few months shy of a year old showed that Nathan had mitochondrial disease. Mitochondrial Disease is a genetic disorder that has caused havoc on the cells of many organ systems in our son’s body. The mitochondria are responsible for creating 90% of the energy needed by the body to sustain life and support growth. When they fail, cell injury and cell death can occur, and the life of the person whom this is happening is severely compromised. It is a degenerative disease that has no cure. This diagnosis does not deter Nathan from living an incredibly fulfilling life, however shortened it may be. Despite what his limitations are now and in the future, he continues to live a whole and incredibly happy life in however time he is given on this earth. He has lost many friends to this disease, but it does not keep him from living on joyfully through the obstacles that are presented. This disease has caused many issues in our son’s body, but it does not deter him from living an incredibly happy life. Nathan teaches us and so many others about true courage and strength as he continues to fight each obstacle with bravery and a heart-warming smile. Thank you. You may never realize the magnitude your words and actions mean to one individual or one family in all of this. The devotion you all give to each of these children lay heavy on their parents’ hearts, as we don’t know how we will ever repay you for your kindness, love, and devotion you all have shown to our children. Thank you. Those words seem so insignificant sometimes, but please know that they are coming from the very bottom of our hearts. Words simply can not express what our emotions feels in these times. Just...thank you.',
            'image' => 'Nathan',
            ),
            array(
            'name' => 'Nathan W.',
            'description' => 'When our son, Nathan, was ten months old, he underwent open-heart surgery. As first-time parents we were scared to death. Nathan was diagnosed with Tetrology of Fallot. His surgery required the repair of a tiny hole with a man made patch. This sounds so easy, however, he had a month-long stay at Shands Hospital because he had a few complications and his heart had to get used to the repair. My family and I are so grateful for his repair, the Shand’s Cardiology Team, surgeons Dr. Claudell and Dr. Alexander, his cardiologist Dr. Fricker and the team of nurses who took care of him. When it comes to the Cogenital Heart Center at UF, dreams can come true. Nathan’s surgery was at ten months old and he is now twelve and growing in leaps and bounds, enjoying life. Nathan is well rounded and thriving. He is certainly a “miracle”. Nathan attends regular follow-ups with his cardiologist, Dr. Chandran, who has been with every step of the way and nurse Connie. Both excellent in their professions. With these wonderful people in Nathan’s corner, he will be able to live his life, making great strides, and with the peace of mind that Cardiology is there if he ever should need them. He is the type of kid who doesn’t let his diagnoses define him. He loves life and enjoys being in the group. Ever since Nathan was old enough to swim, he hit the pool, loving his lessons and swimming. He has come a long way as a heart survivor. I do not feel that, “Thanks”, was said enough to the generous staff and nurses, “The Team,” THANK YOU!',
            'image' => 'Nathan W',
            ),
            array(
            'name' => 'Nick M.',
            'description' => 'Nick was diagnosed with hypertrophic cardiomyopathy when he was 2 years old. Up until age 10, he simply took a daily medication to help his heart beat slowly and easily and lived life like any other boy. That changed in the summer of 2012 when Nick underwent a cardiac MRI to evaluate the size of his heart and its structures.

Our family moved to Gainesville from Ohio in December 2011 for Jodi’s job. At that point, Nick started receiving his heart care from Dr. Jay Fricker at the Congenital Heart Center. Dr. Fricker wanted Nick to have an MRI of his heart. Nick had never had a cardiac MRI before because it really was not available at our previous hospital. The MRI results showed that Nick’s heart size put him at risk for developing a sudden and potentially fatal heart rhythm. We saw an electrophysiologist, Dr. Randall Bryant, who comes from Jacksonville to Gainesville regularly to see patients. Dr. Bryant recommended that Nick have an internal defibrillator placed under his skin with tiny wires attached to his heart so that any life threatening heart rhythm could be shocked back to normal a rhythm if necessary.

Because of Nick’s hypertrophic cardiomyopathy he has regular visits with Dr. Fricker and Dr. Bryant. He has had one cardiac MRI and regularly gets heart echo tests and 12-lead EKG tests. He has also had blood work performed to identify a possible genetic cause for his heart condition. In September 2012 Nick had surgery at Shands for placement of an internal defibrillator. He spent one night on unit 44 pediatrics.

Nick remains a very social and positive guy. He tries his best despite his obstacles. Because of his heart condition, he is not allowed to participate in moderately-intense sports like baseball, soccer or basketball. This makes Nick sad because he loves to play sports especially basketball and is pretty good at throwing a ball. Nick is, however, allowed to participate in the sport of bowling. After being off bowling for nearly 8 weeks to allow his defibrillator surgical site to heal, he got back into the “swing of things!” Nick bowls every Saturday with a Gainesville youth league and participates in 1-2 tournaments each year throughout the state of Florida.

Nick particularly enjoys being involved with Dance Marathon at the University of Florida. He has met so many amazing college students who dedicate their time and energy to raising money for Children’s Miracle Network. Nick loves to hang out with the “big kids” and they treat him like a rock star!

',
            'image' => 'Nick M',
            ),
            array(
            'name' => 'Randy G.',
            'description' => 'When Randy was born, he had no clotting factors and had to have an open liver biopsy at 2 weeks of age, he was diagnosed with idiopathic neonatal giant cell hepatitis. They gave him 5 days to live and put him as a status 1 on the transplant list for a new liver. 5 days later he was dropped to a status 2 and given 7 more days. Mid-week he developed 2 infections and was dropped from the registry. At this point hospice became involved and the doctors worked towards sending him home to pass there because we didn’t want it to happen at the hospital. The day before he was to come home we got the call that a liver had become available for another patient at the hospital and that it was too big. So if they were able to successfully separate it then he could get the other half. At 28 days of age, and after 8 hours of surgery, randy received a liver transplant. That was 16 years ago. Now he is a thriving high school student at Bucholz High School and planning to play basketball next year. We weren’t even promised 5 years yet we have celebrated over 16.',
            'image' => 'Randy G',
            ),
            array(
            'name' => 'Sage P.',
            'description' => 'Sage was born with a congenital heart defect called Hypoplastic left heart syndrome, which means he only has half of a heart. His CHD was undiagnosed at the time and  we were being discharged from the hospital when we saw he wasn’t breathing correctly. He has undergone three open-heart surgeries, one at 1-week-old, one when he was 3 months old and one when he was 3 years old. Sage will eventually need a heart transplant when he’s in his late teens or early twenties. Sage was born in the Tampa area and flown by helicopter to UF Health Shands Children’s Hospital. After his second surgery we moved to the Gainesville area to be closer to Shands and all of his doctors. Through all of his doctors appointments and hospital visits, UF Health Shands has become our home away from home. Sage just had his 7th birthday and is an energetic little boy who loves playing baseball and riding his dirt bike. He’s also a Children’s Miracle Network ambassador. Our family appreciates the benefits of CMN and helping others by spreading awareness regarding CMN. Sage is truly our miracle. ',
            'image' => 'Sage P',
            ),
            array(
            'name' => 'Sam N.',
            'description' => 'Samuel’s parents knew he was a fighter long before his birth. After a very complex pregnancy, Samuel was delivered at full term and weighed 8lbs, the picture of normal physical development... except he was not breathing. Life-saving efforts in the NICU stabilized him but with the limited resources of his small local hospital, his parents had many questions on the mounting unexplained health issues. He experienced an acute life threatening event and was resuscitated only to be sent home on a monitor the next day only leading to a terrifying week.  Samueal was ambulanced to the nearest children’s hospital for severe bradycardic episodes and respiratory distress.The months to follow were spent in and out of several hospital ICUs with extensive testing and numerous surgeries.  Teams of physicians tried to discern the source of his multi-systemic health concerns: encephalopathy, global developmental delay, tracheomalacia, seizures, Gastro- Intestinal dysmotility and paresis, hypotonia, oromotor dysfunction, apnea, bradycardia, respiratory insufficiency, and failing to thrive on a GJ feeding tube.. While being told to expect that he might never walk, talk or live a normal life, his parents continued to fight for answers. One difficult surgical muscle biopsy results revealed what was threatening their son’s life. Samuel is fighting a mitochondrial disease. The mitochondria are the part of every cell responsible for creating 90% of the energy our organs need to function. When his body is compromised by stress or illness, cell injury and cell death follow. This condition is considered degenerative and  progressive and he has fought through very difficult metabolic declines following typical stressors, such as a warm ride in the stroller or even a simple ear infection. Samuel has this disease, but it does not have him. He has shown incredible strength and determination, defying all the odds and reaching milestones with much effort, therapy and support. He continues to amaze and inspire all those around him. If it were not for the care and support, treatments and interventions provided by UF Health Shands, Samuel might not be here today, showing us all how to manage challenging circumstances and appreciate life. Thank you for making a difference in the life of a child through the Children’s Miracle Network Dance Marathon,he results of your heartfelt efforts are made tangible by the smiles that illuminate our children’s faces despite what they endure. Just like the dancing spirit on that gymnasium floor, your spirit fills their hearts with joy and appreciation. Thank you for sharing this dance with them.',
            'image' => 'Sam N',
            ),
            array(
            'name' => 'Tyler P.',
            'description' => 'We learned that Tyler had a cleft several months before he was born. We saw the craniofacial team, who helped prepare us for his birth and what challenges we may face afterwards There was a team of specialists present when he was born. He had surgery at three months, and was readmitted a few days later with complications. After a challenging recovery, he regained his strength and grew to be the sweet, lovable 7-year-old boy he is now. He loves Children’s Miracle Network and UF Health Shands Children’s Hospital because, as he says, they ’sewed him a new smile’. We continue to see the craniofacial team at Shands and benefit from the incredible team there!',
            'image' => 'Tyler P',
            ),
            array(
            'name' => 'Tyler S.',
            'description' => 'As a healthy and active 7-year-old boy, Tyler enjoyed playing basketball, soccer, tennis and golf. Just like most active 7-year-old boys, Tyler enjoys sports and playing outside. In February of 2005 all of this changed. While practicing his basketball skills with his father, we noticed that Tyler could not bring his arm in without shaking uncontrollably. We decided to have this examined, and this was the beginning of a long and disheartening journey. Tyler was in and out of UF Health Shands Children’s Hospital in Gainesville, Fla. and many other renowned hospitals. Tyler was examined by many specialists that performed numerous painful tests and treatments that resulted in dead ends and misdiagnosis. This was extremely frustrating to everyone, but none more than Tyler. During one of Tyler’s inpatient stays at UF Health Shands, we were introduced to Dr. Michael Okun. This meeting resulted in his examination of Tyler and rendering a diagnosis of Primary Generalized Early-Onset Dystonia, and  confirmed with a blood test for the Dyt1 Dystonia gene. Though we were all relieved to have a “diagnosis”, we were also very distraught as we learned about this devastating disorder. Dystonia is a neurological movement disorder affecting the central nervous system, characterized by involuntary, and often painful, spasms of the muscles. This disorder currently has no cure and progressively robs one of their ability to control voluntary movements and even the ability to walk. The earlier that a child shows symptoms of Dystonia, the more significant those symptoms become. Our son, Tyler, is now very disabled. Although Tyler grows physically and mentally normally, he is twisted, cannot eat or speak without extreme difficulty, cannot walk, read a book, or play with other kids like he used to. Tyler is remarkably good-natured and continues to have a positive attitude about his dystonia. A few years after Tyler’s diagnosis, our daughter Samantha started showing symptoms and was diagnosed with generalized dystonia. Since Tyler and Samantha have the genetic form, there is a 50/50 chance that our youngest child will carry this gene with a 30% chance that he will become symptomatic of it.',
            'image' => 'Tyler S',
            ),
            array(
            'name' => 'William C.',
            'description' => 'William was 15 months old when he had his first pediatric cardiology appointment at the UF Health Congenital Heart Center. He spent most of the first year of his life sick – reflux, congestion, extreme eczema, repeated respiratory infections, including pneumonia at 8 months old, which landed him in our local hospital for a week. When William was 11 months old, he was hospitalized again — this time with rotavirus. It was during that hospital stay that his new doctor diagnosed William with Scimitar Syndrome, after he had received a chest CT scan done to rule out a possible respiratory infection. Scimitar Syndrome is a birth defect that adversely affects the right lung and right side of the heart. In June 2006, when William was 2, he underwent his first open-heart surgery. Life ran smoothly until August 2012, when Dr. Fricker noticed the slightest change in William’s heart. William had a cardiac MRI and then underwent his second cardiac catheterization. The MRI and cath showed that William had a blockage in his scimitar vein and had developed pulmonary hypertension. Five days before Christmas in 2012, when William was 8, he underwent his second open-heart surgery with Dr. Bleiweis. Since then, we have cardiology and pulmonary checkups every 6 months. In February 2014, Dr. Fricker noticed that William’s pulmonary pressures were creeping up again. In May 2014, William underwent his third cardiac cath. During the 8-hour procedure, they were able to balloon open William’s scimitar vein and his inferior vena cava, both of which were blocked. The angioplasty procedure saved William from another immediate open-heart surgery. He will need more interventions in the future, but he’s doing very well right now. He plays flag football and has been able to keep up with his friends much better than before his interventional cath. William has had so many “best days of his life”, a few of which were made possible by Children’s Miracle Network. Some of his other “best days” include being able to get out on the field and play flag football like all of his friends, and going to amusement parks and being able to ride whatever he wants to ride. He’s a happy kid who enjoys being active, playing football with his friends, hanging out with his older brother, Martin, and just being a regular kid. The level of care available at UF Health Shands Children’s Hospital and the UF Health Congenital Heart Center has meant my son’s life. He would not be the active, healthy, smart-aleck, energetic kid he is without them. It’s quite possible that without UF Health Shand’s care, he wouldn’t be here at all. UF Health Shands Children’s Hospital is a magical place, and Children’s Miracle Network is a huge part of that magic.',
            'image' => 'William C',
            ),
            array(
            'name' => 'Wyatt T.',
            'description' => 'Wyatt was born with five major heart defects that eventually led to complete heart failure. At 2 months old he had to be placed on the Berlin Heart (mechanical heart) to help sustain him until a donor heart became available. After 217 long days Wyatt received his gift of life. After a total of 276 days ,at the age of 10 and a half months, we were finally able to bring our miracle baby home. He hit the floor running and has not stopped yet.',
            'image' => 'Wyatt T',
            ),
        array(
            'name' => 'Zander W.',
            'description' => 'Zander was born on November 29,2006 at Capital Regional Medical Center (CRMC). He started to turn blue and was transported to Tallahassee Memorial Hospital (TMH) because they had a NICU. While he was at TMH he was diagnosed with a congenital heart defect called Transposition of the Greater Vessels (TOGV). Zander was then life flighted to UF Health Shands Children’s Hospital in Gainesville. When Zander was a day old he had to have two heart caths because the first one didn’t take. When Zander was six days old he had open heart surgery. When he was ten or eleven days old they closed his chest cavity. At one month old he had stomach surgery for Pyloric Stenosis. When Zander was four and a half months old he had head surgery for Craniosynostosis (his soft spot closed no later than four months old). In April 2012 Zander had tubes put in his ears for repeat ear infections. In November,2012, Zander received head surgery again, but this time to fill in the man made soft spot. Doctors filled it in with bone putty, titanium mesh, and titanium screws. Zander calls the scar on his chest his zipper and calls the scar on his head his lucky “C” for courageous, cutie patootie, while we call it our lucky horseshoe. In January 2014, Zander was diagnosed with both Neuropathy as well as Restless Leg Syndrome. On May 15, 2014 we picked up Zander’s Glow-In-The-Dark Wheelchair to help with long distances. Zander also has gas reflux (a type of acid reflux), asthma, food allergies, and seasonal allergies. Even with everything that Zander has been diagnosed with he is the life of the party and loves to dance. He has told his doctors on multiple occasions that he is going to keep dancing even if it hurts.',
            'image' => 'Zander',
            )

        );
?>

<div class="page-heading parallax family">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Meet the Kids</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
						<li><a class="active">Meet the Kids</a></li>
						<li><a href="/family-events">Family Events</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>Meet our Kids, Meet our Miracles</h3><br />
        <p>Take a moment to meet the heart and soul of our philanthropy. Our Miracle Children are the inspiration for every student who is part of DM at UF.</p>
        <?php
        for($i = 0; $i < count($kids); $i++) {
          if($i % 4 == 0) {
            echo '<div class="row">';
          } ?>
            <!-- Button trigger modal -->
            <div class="col-xs-3">
                <a href="#" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                    <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/kids/thumbnails/'.$kids[$i]['image']); ?>.jpg" alt="..."><br>
                    <p><?php echo $kids[$i]['name']; ?></p>
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label">Meet <?php echo $kids[$i]['name']; ?></h3>
                  </div>
                  <div class="modal-body">
<!--
                    <img src="<?php echo ('/assets/images/kids/fullsize/'.$kids[$i]['image']); ?>.png" class="img-responsive img-full" />
                    <hr>
-->
                    <p>
                        <?php echo $kids[$i]['description']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php
          if(($i - 3) % 4 == 0) {
            echo '</div>';
          }
        } ?>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
