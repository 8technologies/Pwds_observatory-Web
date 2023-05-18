-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: ict4pwds
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `disabilities`
--

DROP TABLE IF EXISTS `disabilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disabilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disabilities`
--

LOCK TABLES `disabilities` WRITE;
/*!40000 ALTER TABLE `disabilities` DISABLE KEYS */;
INSERT INTO `disabilities` VALUES (1,'2023-02-24 18:32:35','2023-02-24 18:32:35','AUTISM','images/oic_logo_hi_res.jpg','A developmental disability significantly affecting verbal and nonverbal communication and social interaction, generally evidence before age three, that adversely affects a child\'s performance. Other characteristics often associated with autism with autism are engaging in repetitive activities and stereotyped movements, resistance to environmental change or change in daily routines, and unusual responses to sensory experiences. The term autism does not apply if the child\'s educational performance is adversely affected primarily because the child has an emotional disturbance.\r\n\r\nA child who shows the characteristics of autism after age three could be diagnosed as having autism if the criteria above are satisfied.'),(2,'2023-03-02 14:53:01','2023-03-02 14:53:01','Vision impairment','images/2.jpg','<p>Vision impairment refers to people who are blind or who have partial vision.</p><p>When talking with a person who is blind or has a vision impairment:</p><ul><li>always identify yourself and any others with you</li><li>ask if the person requires assistance, and listen for specific instructions, however be prepared for your offer to be refused.</li></ul><p>If guiding a person, let them take your arm, rather than taking theirs. Describe any changes in the environment such as steps, obstacles, etc.</p><p>If the person has a guide dog, please remember the dog is working and should not be patted, fed or distracted.</p><p><strong style=\"background-color: transparent;\">Tips</strong></p><ul><li>Ensure front of office staff are briefed and prepared on how to greet and assist people with vision impairment.</li><li>Allow more time and greater flexibility for training and induction.</li><li>Be aware that glare and poor lighting may exacerbate vision impairment.</li></ul>'),(3,'2023-03-02 14:54:09','2023-03-02 14:54:09','Deaf or hard of hearing','images/GettyImages-1148111621-5dda498c30de460b9ad2f9784ba8aec7.jpg','<p>Hearing impairments can range from mild to profound. People who are hard of hearing may use a range of strategies and equipment including speech, lip-reading, writing notes, hearing aids or sign language interpreters.</p><p>When talking to a person who is deaf or hard of hearing:</p><ul><li>look and speak directly to them, not just to the people accompanying them, including interpreters</li><li>speak clearly and use a normal tone of voice unless otherwise instructed by the person with the hearing impairment</li><li>if you don\'t understand what a person is saying, ask them to repeat or rephrase, or alternatively offer them a pen and paper.</li></ul><p><strong style=\"background-color: transparent;\">Tips</strong></p><ul><li>Ensure front of office staff are briefed and prepared on how to greet and assist people who are deaf or hard of hearing.</li><li>Allow more time and greater flexibility for training and induction.</li><li>Consider workspace location - allowing the employee to see people entering the room and situate the workstation in an area where there is minimal background noise.</li></ul>'),(4,'2023-03-02 14:56:07','2023-03-02 14:56:07','Mental health conditions','images/mental illness.jpg','<h2>People with mental health conditions</h2><p>Mental illness is a general term for a group of illnesses that affect the mind or brain. These illnesses, which include bipolar disorder, depression, schizophrenia, anxiety and personality disorders, affect the way a person thinks, feels and acts.</p><p>A person with a mental health condition may experience difficulty concentrating, which can sometimes be a result of medication. Try to avoid overly stressful situations wherever possible so that their condition is not exacerbated.</p><p><strong style=\"background-color: transparent;\">Tips</strong></p><ul><li>Provide clear and thorough explanations and instructions, in writing if required.</li><li>Ask the person how they would like to receive information.</li><li>Allow more time and greater flexibility for training and induction.</li></ul><p>Further information: Mental health in the workplace</p>'),(5,'2023-03-02 14:57:38','2023-03-02 14:57:38','Intellectual disability','images/disabilities-in-Africa-1.jpg','<h2>People with intellectual disability</h2><p>A person with an intellectual disability may have significant limitations in the skills needed to live and work in the community, including difficulties with communication, self-care, social skills, safety and self-direction.</p><p>The most important thing to remember is to treat each person as an individual:</p><ul><li>a person with an intellectual disability is just like everyone else - treat them as you would like to be treated</li><li>be considerate of the extra time it might take for a person with an intellectual disability to do or say something</li><li>be patient and give your undivided attention, especially with someone who speaks slowly or with great effort.</li></ul><p><strong style=\"background-color: transparent;\">Tips</strong></p><ul><li>Allow more time and greater flexibility for training and induction.</li><li>Keep the pressure of any given situation to a minimum as stress can affect a person\'s concentration and performance.</li><li>Keep instructions simple and in bite-size pieces use demonstration and increase complexity as progress is made.</li><li>Be aware that a person with intellectual disability may be less aware of social cues and may have less developed social skills.</li><li>Give verbal and written instructions or try giving examples to illustrate ideas and summarise ideas often.</li></ul><p><br></p>'),(6,'2023-03-02 14:58:56','2023-03-02 14:58:56','Acquired brain injury','images/Traumatic-Brain-Injury-300x300.jpg','<h2>People with acquired brain injury (ABI)</h2><p>Acquired brain injury (ABI) refers to any type of brain damage that occurs after birth. The injury may occur because of infection, disease, lack of oxygen or a trauma to the head. Around 160,000 Australians have some form of acquired brain injury, with more men affected than women.</p><p>The long term effects are different for each person and can range from mild to profound. It is common for many people with ABI to experience:</p><ul><li>increased fatigue (mental and physical)</li><li>some slowing down in the speed with which they process information, plan and solve problems</li><li>changes to their behaviour and personality, physical and sensory abilities, or thinking and learning</li><li>may also have difficulty in areas such as memory, concentration and communication.</li></ul><p>A person with an Acquired Brain Injury does not have an intellectual disability and does not have a mental illness</p><p><strong style=\"background-color: transparent;\">Tips</strong></p><ul><li>Allow more time and greater flexibility for training and induction.</li><li>Provide clear and thorough explanations and instructions.</li><li>Minimise stress to maximise concentration and performance.</li><li>Give verbal and written instructions or try giving examples to illustrate ideas and summarise ideas.</li></ul><p><br></p>'),(7,'2023-03-02 15:00:18','2023-03-02 15:00:18','Physical disability','images/Disability-in-Africa.jpg','<h2>People with physical disability</h2><p>The common characteristic in physical disability is that some aspect of a person\'s physical functioning, usually either their mobility, dexterity, or stamina, is affected. People with physical disability are usually experts in their own needs, and will understand the impact of their disability.</p><p>There are many different kinds of disability and a wide variety of situations people experience. The disability may be permanent or temporary. It may exist from birth or be acquired later in life. People with the same disability are as likely as anyone else to have different abilities.</p><p><strong style=\"background-color: transparent;\">Tips</strong></p><ul><li>Always ask before offering assistance.</li><li>Be at the same level when talking with the person.</li><li>Never assume that a person with physical disability also has intellectual disability.</li><li>Ask permission before touching a person\'s wheelchair or mobility aid.</li></ul><h2>Related guidance</h2><ul><li><a href=\"https://services.anu.edu.au/human-resources/respect-inclusion/disability-resource-guide\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 84, 158);\">Disability resource guide</a></li><li><a href=\"https://services.anu.edu.au/human-resources/respect-inclusion/staff-disability-support\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 84, 158);\">Staff disability support</a></li><li><a href=\"https://services.anu.edu.au/human-resources/respect-inclusion/disability-communication-etiquette\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 84, 158);\">Disability communication &amp; etiquette</a> </li></ul><p><br></p><p> </p><p><br></p><p><br></p><p><br></p>'),(8,'2023-03-02 15:01:25','2023-03-02 15:01:25','Albinism','images/0f618ebad0d0d7649b4a83e7fb10ca7e.jpg','<p><strong>Is Albinism a disability?</strong></p><p>Persons with Albinism are usually as healthy as the rest of the population, with growth and development occurring as normal, but can be classified as disabled because of the associated visual impairments.</p><p><strong>What is Albinism?</strong></p><p>Albinism in humans is a congenital disorder characterized by the complete or partial absence of pigment in the skin, hair and eyes due to absence or defect of tyrosinase, a copper-containing enzyme involved in the production of melanin. It is the opposite of melanism. Unlike humans, other animals have multiple pigments and for these, albinism is considered to be a hereditary condition characterised by the absence of pigment in the eyes, skin, hair, scales, feathers or cuticle.</p><p>Albinism is associated with a number of vision defects, such as photophobia, nystagmus and amblyopia. Lack of skin pigmentation makes for more susceptibility to sunburn and skin cancers. In rare cases such as Chédiak–Higashi syndrome, albinism may be associated with deficiencies in the transportation of melanin granules. This also affects essential granules present in immune cells leading to increased susceptibility to infection.</p><p>In humans, there are two principal types of albinism: oculocutaneous, affecting the eyes, skin and hair, and ocular affecting the eyes only.</p><p>Most people with oculocutaneous albinism appear white or very pale, as the melanin pigments responsible for brown, black, and some yellow colorations are not present. Ocular albinism results in light blue eyes, and may require genetic testing to diagnose.</p><p>Because individuals with albinism have skin that entirely lacks the dark pigment melanin, which helps protect the skin from the sun’s ultraviolet radiation, their skin can burn more easily from overexposure.</p><p>The human eye normally produces enough pigment to colour the iris blue, green or brown and lend opacity to the eye. In photographs, those with albinism are more likely to demonstrate “red eye,” due to the red of retina being visible through the iris. Lack of pigment in the eyes also results in problems with vision, both related and unrelated to photosensitivity.</p>'),(9,'2023-03-02 15:03:50','2023-03-02 15:03:50','Dwarfism','images/pinews-jb-dwarf-ug-jpg.jpg','<p>Dwarfism is short stature that results from a genetic or medical condition. Dwarfism is generally defined as an adult height of 4 feet 10 inches (147 centimeters) or less. The average adult height among people with dwarfism is 4 feet (122 cm).</p><p>Many different medical conditions cause dwarfism. In general, the disorders are divided into two broad categories:</p><ul><li><strong>Disproportionate dwarfism.</strong>&nbsp;If body size is disproportionate, some parts of the body are small, and others are of average size or above-average size. Disorders causing disproportionate dwarfism inhibit the development of bones.</li><li><strong>Proportionate dwarfism.</strong>&nbsp;A body is proportionately small if all parts of the body are small to the same degree and appear to be proportioned like a body of average stature. Medical conditions present at birth or appearing in early childhood limit overall growth and development.</li></ul><p>Some people prefer the term \"short stature\" or \"little people\" rather than \"dwarf\" or \"dwarfism.\" So it\'s important to be sensitive to the preference of someone who has this disorder. Short stature disorders do not include familial short stature — short height that\'s considered a normal variation with normal bone development.</p><h3><strong>Products &amp; Services</strong></h3><ul><li><a href=\"https://order.store.mayoclinic.com/books/gnweb43?utm_source=MC-DotOrg-PS&amp;utm_medium=Link&amp;utm_campaign=FamilyHealth-Book&amp;utm_content=FHB\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 61, 165);\">Book: Mayo Clinic Family Health Book, 5th Edition</a></li></ul><p>Show more products from Mayo Clinic</p><p><br></p><h2>Symptoms</h2><p>Signs and symptoms — other than short stature — vary considerably across the spectrum of disorders.</p><h3><strong>Disproportionate dwarfism</strong></h3><p>Most people with dwarfism have disorders that cause disproportionately short stature. Usually, this means that a person has an average-size trunk and very short limbs, but some people may have a very short trunk and shortened (but disproportionately large) limbs. In these disorders, the head is disproportionately large compared with the body.</p><p>Almost all people with disproportionate dwarfism have normal intellectual capacities. Rare exceptions are usually the result of a secondary factor, such as excess fluid around the brain (hydrocephalus).</p><p>The most common cause of dwarfism is a disorder called achondroplasia, which causes disproportionately short stature. This disorder usually results in the following:</p><ul><li>An average-size trunk</li><li>Short arms and legs, with particularly short upper arms and upper legs</li><li>Short fingers, often with a wide separation between the middle and ring fingers</li><li>Limited mobility at the elbows</li><li>A disproportionately large head, with a prominent forehead and a flattened bridge of the nose</li><li>Progressive development of bowed legs</li><li>Progressive development of swayed lower back</li><li>An adult height around 4 feet (122 cm)</li></ul><p>Another cause of disproportionate dwarfism is a rare disorder called spondyloepiphyseal dysplasia congenita (SEDC). Signs may include:</p><ul><li>A very short trunk</li><li>A short neck</li><li>Shortened arms and legs</li><li>Average-size hands and feet</li><li>Broad, rounded chest</li><li>Slightly flattened cheekbones</li><li>Opening in the roof of the mouth (cleft palate)</li><li>Hip deformities that result in thighbones turning inward</li><li>A foot that\'s twisted or out of shape</li><li>Instability of the neck bones</li><li>Progressive hunching curvature of the upper spine</li><li>Progressive development of swayed lower back</li><li>Vision and hearing problems</li><li>Arthritis and problems with joint movement</li><li>Adult height ranging from 3 feet (91 cm) to just over 4 feet (122 cm)</li></ul><h3><strong>Proportionate dwarfism</strong></h3><p>Proportionate dwarfism results from medical conditions present at birth or appearing in early childhood that limit overall growth and development. So the head, trunk and limbs are all small, but they\'re proportionate to each other. Because these disorders affect overall growth, many of them result in poor development of one or more body systems.</p><p>Growth hormone deficiency is a relatively common cause of proportionate dwarfism. It occurs when the pituitary gland fails to produce an adequate supply of growth hormone, which is essential for normal childhood growth. Signs include:</p><ul><li>Height below the third percentile on standard pediatric growth charts</li><li>Growth rate slower than expected for age</li><li>Delayed or no sexual development during the teen years</li></ul><h3><strong>When to see a doctor</strong></h3><p>Signs and symptoms of disproportionate dwarfism are often present at birth or in early infancy. Proportionate dwarfism may not be immediately apparent. See your child\'s doctor if you have any concerns about your child\'s growth or overall development.</p>');
/*!40000 ALTER TABLE `disabilities` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16 16:27:17