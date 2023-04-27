-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 26 Avril 2023 à 17:22
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ghiblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`) VALUES
(1, 12, 9),
(3, 18, 9),
(4, 18, 10),
(5, 12, 10),
(6, 14, 10),
(7, 18, 11),
(8, 15, 11),
(9, 19, 11),
(11, 20, 11),
(12, 13, 11),
(13, 12, 12),
(14, 18, 12),
(15, 15, 12),
(16, 20, 12),
(17, 12, 13),
(18, 16, 13),
(19, 20, 13),
(20, 21, 11),
(21, 12, 11);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `likes`, `published`, `creation_date`) VALUES
(12, 10, 3, 'What is Studio Ghibli ?', '1682430732_1682006381_ghibli-studios.PNG', '&lt;p&gt;Studio Ghibli is a Japanese animation studio that has captured the hearts of people all over the world with its unique storytelling and breathtaking visuals. Founded in 1985 by directors Hayao Miyazaki, Isao Takahata, and producer Toshio Suzuki, Studio Ghibli has produced some of the most iconic and beloved animated films of all time.&lt;/p&gt;&lt;p&gt;Studio Ghibli films are known for their whimsical and imaginative worlds, complex characters, and strong themes of environmentalism, pacifism, and anti-war sentiment. The studioâ€™s films are often inspired by Japanese folklore and mythology, as well as the natural world, which is depicted in vivid detail.&lt;/p&gt;&lt;p&gt;One of Studio Ghibliâ€™s most well-known films is Spirited Away, which tells the story of a young girl named Chihiro who is transported to a mystical world full of strange creatures and spirits. The film won the Academy Award for Best Animated Feature in 2003 and is often cited as one of the best animated films of all time.&lt;/p&gt;&lt;p&gt;Another beloved film from Studio Ghibli is My Neighbor Totoro, which tells the story of two young sisters who move to the countryside with their father and discover a world of magical creatures, including the titular Totoro, a giant, friendly forest spirit. The film has become an icon of Japanese culture and has been referenced in popular media all over the world.&lt;/p&gt;&lt;p&gt;Other notable films from Studio Ghibli include Princess Mononoke, which explores the relationship between humans and nature, and Howlâ€™s Moving Castle, a fantastical story of a young girl who is transformed into an old woman and must navigate a world of magic and war.&lt;/p&gt;&lt;p&gt;One of the unique things about Studio Ghibli films is their attention to detail, from the stunningly beautiful animation to the complex and nuanced characters. The films often deal with complex themes that are rarely explored in Western animation, such as the impact of war on society and the importance of preserving the natural world.&lt;/p&gt;&lt;p&gt;In recent years, Studio Ghibli has faced some challenges, including the retirement of its co-founder and chief creative force, Hayao Miyazaki, as well as the studioâ€™s decision to stop producing new films. However, the studioâ€™s legacy lives on through its extensive catalog of films, which continue to captivate audiences all over the world.&lt;/p&gt;&lt;p&gt;In conclusion, Studio Ghibli is a unique and influential animation studio that has created some of the most beloved and iconic animated films of all time. Its films are renowned for their imaginative worlds, complex characters, and strong themes, and have left a lasting impact on the world of animation and storytelling.&lt;/p&gt;', 5, 1, '2023-04-20 17:59:41'),
(13, 11, 2, 'My Neighbor Totoro - review', '1682500417_my-neighbor-totoro.jpg', '&lt;p&gt;My Neighbor Totoro is a classic anime film produced by Studio Ghibli and directed by the legendary animator, Hayao Miyazaki. The movie tells the story of two sisters, Satsuki and Mei, who move to a rural village with their father to be closer to their mother who is recovering from an illness. The girls soon discover that their new home is surrounded by magical creatures, including the iconic Totoro, a friendly forest spirit who becomes their friend and guardian.&lt;/p&gt;&lt;p&gt;From the very beginning, My Neighbor Totoro is a visually stunning and emotionally engaging film. The animation is breathtakingly beautiful, with vivid colors and richly detailed landscapes that perfectly capture the wonder and magic of the natural world. The movie\\\'s characters are equally enchanting, each with their own unique personalities and quirks that make them feel like real people.&lt;/p&gt;&lt;p&gt;The relationship between Satsuki and Mei is at the heart of the movie, and it is a joy to watch their interactions and see how they support and care for each other. Their friendship with Totoro is equally delightful, as they explore the forest together and share in the joys and wonders of nature. The scenes involving Totoro and the girls are some of the most memorable in the movie, filled with humor, joy, and a sense of childlike wonder.&lt;/p&gt;&lt;p&gt;But My Neighbor Totoro is not just a feel-good movie about friendship and nature. The film also deals with some serious themes, including the struggles of dealing with illness and the stress that can come with moving to a new home. These themes are handled with a great deal of sensitivity and nuance, making the movie feel all the more authentic and relatable.&lt;/p&gt;&lt;p&gt;Overall, My Neighbor Totoro is a masterpiece of animation, storytelling, and emotion. It is a movie that can be enjoyed by people of all ages, as it speaks to the childlike wonder and sense of adventure that is present in all of us. If you havenâ€™t seen this film yet, I highly recommend that you do so â€“ it is a true gem of anime cinema that will leave you feeling inspired, uplifted, and filled with a sense of joy and wonder.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;â€œTotoro, I beg you, please protect Mei. Sheâ€™ll be lost, and probably scared. Please believe me, Iâ€™ll be good for the rest of my life if I can just see her again.â€ - Satsuki Kusakabe&lt;/p&gt;&lt;/blockquote&gt;', 1, 1, '2023-04-20 18:04:21'),
(14, 9, 2, 'Howl\'s Moving Castle - review', '1682504740_howls-moving-castle.jpg', '&lt;p&gt;Howlâ€™s Moving Castle is a beloved anime film produced by Studio Ghibli and directed by the legendary animator, Hayao Miyazaki. The movie is based on the novel of the same name by Diana Wynne Jones and tells the story of Sophie, a young woman who is cursed by a witch and transformed into an old woman. She then sets out on a magical adventure to seek the help of the wizard Howl, who lives in a mysterious moving castle.&lt;/p&gt;&lt;p&gt;From the beginning, Howlâ€™s Moving Castle is a visually stunning and emotionally engaging film. The animation is breathtakingly beautiful, with lush landscapes, intricate character designs, and stunning magical effects that transport the viewer to a world of wonder and enchantment. The movieâ€™s characters are equally captivating, each with their own unique personalities and motivations that make them feel like real people.&lt;/p&gt;&lt;p&gt;The relationship between Sophie and Howl is at the heart of the movie, and it is a joy to watch their interactions and see how they help each other grow and overcome their respective challenges. Their journey is filled with humor, romance, and a sense of adventure that keeps the viewer engaged from start to finish.&lt;/p&gt;&lt;p&gt;But Howlâ€™s Moving Castle is not just a fairy tale romance. The film also deals with some serious themes, including war, politics, and the dangers of greed and power. These themes are handled with a great deal of nuance and subtlety, making the movie feel all the more relevant and thought-provoking.&lt;/p&gt;&lt;p&gt;Overall, Howlâ€™s Moving Castle is a masterpiece of animation, storytelling, and emotion. It is a movie that can be enjoyed by people of all ages, as it speaks to the universal themes of love, courage, and the human spirit. If you havenâ€™t seen this film yet, I highly recommend that you do so â€“ it is a true gem of anime cinema that will leave you feeling inspired, uplifted, and filled with a sense of wonder.&lt;/p&gt;&lt;p&gt;â€œItâ€™s Been A Pleasure Meeting You, Even If You Are My Least Favorite Vegetable.â€œ - Sophie, To Turnip-Head&lt;/p&gt;', 1, 1, '2023-04-20 18:04:46'),
(15, 9, 2, 'Spirited Away - review', '1682505787_spirited-away.jpg', '&lt;p&gt;Spirited Away is a critically acclaimed anime film directed by Hayao Miyazaki and produced by Studio Ghibli. The movie tells the story of Chihiro, a young girl who becomes trapped in a magical world of spirits and supernatural beings after her family accidentally stumbles upon an abandoned amusement park.&lt;/p&gt;&lt;p&gt;From the very first frame, Spirited Away is a visually stunning and emotionally captivating film. The animation is breathtakingly beautiful, with richly detailed landscapes, imaginative character designs, and intricate magical effects that transport the viewer to a world of wonder and enchantment. The movieâ€™s characters are equally fascinating, each with their own unique personalities and backstories that make them feel like real people.&lt;/p&gt;&lt;p&gt;The movieâ€™s central character, Chihiro, is a relatable and inspiring protagonist. She is a brave and resourceful young girl who must overcome her fears and find her inner strength in order to save her family and navigate the mysterious and dangerous world of the spirits. Her journey is both thrilling and emotional, and it is impossible not to root for her as she faces increasingly daunting challenges and learns valuable lessons about courage, perseverance, and the power of love.&lt;/p&gt;&lt;p&gt;But Spirited Away is more than just a thrilling adventure story. The movie also deals with some important themes, including environmentalism, the importance of tradition and culture, and the struggle to find oneâ€™s place in the world. These themes are handled with a great deal of nuance and subtlety, making the movie feel all the more resonant and thought-provoking.&lt;/p&gt;&lt;p&gt;I highly recommend taking the time to watch this movie. It\\\'s truly breath-taking and will leave you feeling inspired and uplifted.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;â€œIâ€™ve Gotta Get Out Of This Place. Someday Iâ€™m Getting On That Train.â€ - Lin, to Chihiro&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;', 2, 1, '2023-04-20 18:05:10'),
(16, 9, 4, 'The sounds of Kiki\'s Delivery Service', '1682507816_kikis-delivery-service.jpg', '&lt;p&gt;Kikiâ€™s Delivery Service is a beloved animated film produced by Studio Ghibli and directed by Hayao Miyazaki. The film follows the story of Kiki, a young witch who moves to a new town and starts a delivery service using her broomstick. One of the standout features of the film is its beautiful soundtrack, composed by Joe Hisaishi.&lt;/p&gt;&lt;p&gt;The Kikiâ€™s Delivery Service soundtrack is a delight from start to finish. The music perfectly captures the whimsical and charming tone of the film, with a mix of lively and playful melodies that evoke a sense of childlike wonder. The soundtrack also features a number of lovely vocal tracks, including the iconic &lt;i&gt;Soaring &lt;/i&gt;and &lt;i&gt;A Town with an Ocean View&lt;/i&gt;, which are both incredibly catchy and uplifting.&lt;/p&gt;&lt;p&gt;One of the most impressive things about the Kikiâ€™s Delivery Service soundtrack is how well it complements the visuals of the film. The music seems to dance and play along with the animation, enhancing the emotional impact of each scene and drawing the viewer deeper into the story. From the soaring strings of the opening track to the gentle piano melodies of the closing credits, the soundtrack perfectly captures the spirit of Kikiâ€™s journey.&lt;/p&gt;&lt;p&gt;Another highlight of the soundtrack is the variety of musical styles it incorporates. The music ranges from upbeat and energetic to serene and contemplative, reflecting the different moods and emotions of the filmâ€™s characters. The result is a rich and dynamic soundtrack that keeps the listener engaged and entertained throughout.&lt;/p&gt;&lt;p&gt;In conclusion, the Kikiâ€™s Delivery Service soundtrack is a true masterpiece of film music. It perfectly captures the charm and whimsy of the film, and its catchy melodies and joyful spirit are sure to leave a lasting impression. Whether you are a fan of Studio Ghibli or simply appreciate beautiful music, the Kikiâ€™s Delivery Service soundtrack is not to be missed.&lt;/p&gt;', 1, 1, '2023-04-23 12:04:56'),
(18, 9, 2, 'Porco Rosso - review', '1682504437_porco-rosso.webp', '&lt;p&gt;Porco Rosso is a classic anime film produced by Studio Ghibli and directed by the legendary animator, Hayao Miyazaki. The movie is set in 1920s Italy and follows the adventures of Porco Rosso, a former World War I fighter pilot who has turned his back on the military and now works as a freelance bounty hunter, battling air pirates and protecting the skies from danger.&lt;/p&gt;&lt;p&gt;From the outset, Porco Rosso is a visually stunning and emotionally engaging film. The animation is breathtakingly beautiful, with richly detailed landscapes, breathtaking aerial battles, and charming character designs that perfectly capture the spirit of the era. The movieâ€™s characters are equally captivating, each with their own unique personalities and quirks that make them feel like real people.&lt;/p&gt;&lt;p&gt;The filmâ€™s protagonist, Porco Rosso, is a complex and intriguing character. He is a skilled pilot and a formidable fighter, but he is also haunted by his past and struggling to find his place in the world. His relationships with other characters in the movie, including the air pirate boss Gina and the young mechanic Fio, are handled with sensitivity and nuance, adding depth and complexity to his character.&lt;/p&gt;&lt;p&gt;The movieâ€™s themes are also poignant and thought-provoking, exploring ideas of identity, courage, and the search for meaning in a world that can be harsh and unforgiving. These themes are handled with a great deal of skill and sensitivity, making the movie feel all the more authentic and relatable.&lt;/p&gt;&lt;p&gt;Overall, Porco Rosso is a masterpiece of animation, storytelling, and emotion. It is a movie that can be enjoyed by people of all ages, as it speaks to the human experience and our search for purpose and connection in the world. If you are a fan of Miyazakiâ€™s work, or simply enjoy beautifully animated and emotionally engaging films, then Porco Rosso is definitely worth a watch.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;â€œIâ€™d rather be a pig than a fascist.â€ -Porco Rosso&lt;/p&gt;&lt;/blockquote&gt;', 4, 1, '2023-04-23 12:11:00'),
(19, 9, 4, 'The sounds of Howl\'s Moving Castle', '1682507789_howl005.jpg', '&lt;p&gt;Howlâ€™s Moving Castle is a beloved animated film produced by Studio Ghibli and directed by Hayao Miyazaki. One of the many things that makes this movie so memorable is its beautiful and enchanting soundtrack, composed by Joe Hisaishi. In this blog post, we will explore the music of Howl\\\'s Moving Castle, its themes, and its impact on the film.&lt;/p&gt;&lt;p&gt;The soundtrack of Howlâ€™s Moving Castle is an exquisite combination of classical, orchestral, and folk music. It features the use of piano, strings, woodwinds, and even a harp, creating a unique and ethereal sound that perfectly matches the movie\\\'s magical and whimsical atmosphere. Joe Hisaishiâ€™s composition brilliantly captures the essence of the movieâ€™s themes, characters, and emotions, enhancing the viewer\\\'s experience of the film.&lt;/p&gt;&lt;p&gt;The opening theme of the movie, &lt;i&gt;Merry-Go-Round of Life&lt;/i&gt; sets the tone for the rest of the soundtrack. The piece is a waltz with a whimsical melody that evokes a sense of nostalgia and longing. The use of the piano and the strings creates a magical and enchanting feeling, transporting the listener to a world of wonder and beauty. The theme is reprised throughout the movie, each time with a different arrangement, reflecting the emotional arc of the characters.&lt;/p&gt;&lt;p&gt;Another standout piece in the soundtrack is &lt;i&gt;The Merry-Go-Round of Life (Piano Solo)&lt;/i&gt;, a beautiful rendition of the opening theme played on the piano. This piece is particularly poignant, as it is used during some of the most emotional scenes in the film, including the moment when Sophie realizes her true feelings for Howl.&lt;/p&gt;&lt;p&gt;The soundtrack also features some more upbeat and lively pieces, such as &lt;i&gt;The Witch of the Waste&lt;/i&gt; a whimsical and mischievous tune that perfectly captures the character of the movieâ€™s main villain. &lt;i&gt;Sophie in Exile&lt;/i&gt; is another playful and energetic piece, representing the adventurous spirit of the movieâ€™s protagonist.&lt;/p&gt;&lt;p&gt;One of the most hauntingly beautiful pieces in the soundtrack is &lt;i&gt;The Promise of the World&lt;/i&gt;. This song is used during the movie\\\'s climax, as Howl and Sophie are trying to prevent a war from breaking out. The piece begins with a melancholic piano melody that gradually builds up into a triumphant orchestral arrangement, creating a powerful and emotional experience for the viewer.&lt;/p&gt;&lt;p&gt;The music of Howlâ€™s Moving Castle has had a lasting impact on fans of the movie. Its whimsical and enchanting sound has become synonymous with the world of Studio Ghibli, and Joe Hisaishiâ€™s compositions are often cited as some of the most memorable and emotional in anime history. The soundtrack has been praised for its ability to evoke a sense of wonder, beauty, and emotion, and for its perfect match with the movieâ€™s themes and atmosphere.&lt;/p&gt;&lt;p&gt;In conclusion, the music of Howlâ€™s Moving Castle is a masterpiece of composition, combining classical and folk elements with a unique and enchanting sound. Joe Hisaishiâ€™s soundtrack perfectly captures the themes, emotions, and atmosphere of the movie, enhancing the viewerâ€™s experience and creating a lasting impact on fans. If you havenâ€™t yet experienced the music of Howlâ€™s Moving Castle, do yourself a favor and give it a listen â€“ you wonâ€™t be disappointed.&lt;/p&gt;', 1, 1, '2023-04-26 08:11:48'),
(20, 9, 4, 'The Soundtracks of Studio Ghibli', '1682507627_ghibli-music.jpg', '&lt;p&gt;Studio Ghibli is renowned not only for their beautiful animation but also for their incredible soundtracks that take viewers on an emotional journey. From the whimsical melodies of My Neighbor Totoro to the epic orchestral scores of Princess Mononoke, the music of Studio Ghibli has become just as iconic as the films themselves.&lt;/p&gt;&lt;p&gt;One of the most remarkable things about the music of Studio Ghibli is how it perfectly captures the mood and atmosphere of each film. The soundtracks are carefully crafted to evoke a wide range of emotions, from the wistful nostalgia of childhood to the awe-inspiring wonder of nature. The music becomes an integral part of the storytelling, enhancing the visual experience and drawing the viewer even deeper into the world of each film.&lt;/p&gt;&lt;p&gt;Composer Joe Hisaishi has been the driving force behind many of Studio Ghibli\\\'s most memorable soundtracks. His compositions are often deeply emotional and feature a mix of orchestral and electronic elements that create a unique and evocative sound. Hisaishiâ€™s work has become so closely associated with Studio Ghibli that it is almost impossible to imagine one without the other.&lt;/p&gt;&lt;p&gt;The music of Studio Ghibli is not only beloved by fans of the films but has also gained a wider following outside of Japan. The soundtracks have been performed in concert halls around the world, and many of the songs have been covered by musicians and singers across various genres.&lt;/p&gt;&lt;p&gt;In conclusion, the soundtracks of Studio Ghibli are an essential part of the studio\\\'s magic. The music takes the viewer on a journey and brings the films to life in a way that is truly unforgettable. Whether you are a die-hard fan or a newcomer to the world of Studio Ghibli, the music is sure to leave a lasting impression and transport you to a world of wonder and enchantment.&lt;/p&gt;&lt;p&gt;If youâ€™re curious hereâ€™s a link to a Studio Ghibli concert : &lt;a href=\\&quot;&amp;quot;https://www.youtube.com/watch?v=qg-g2DH8GZw&amp;quot;\\&quot;&gt;https://www.youtube.com/watch?v=qg-g2DH8GZw&lt;/a&gt;&amp;nbsp;&lt;/p&gt;', 3, 1, '2023-04-26 12:53:33'),
(21, 11, 3, 'New things to come...', '1682508182_to-come.jpg', '&lt;p&gt;Thank you so much for all the support on our blog!! Weâ€™re hard at work writing out new blog posts that will be posted soon so stay tuned. Hereâ€™s a list of some of our future posts to come :&lt;/p&gt;&lt;p&gt;&amp;nbsp;- Grave of the Fireflies - review&lt;/p&gt;&lt;p&gt;&amp;nbsp;- Top 10 Studio Ghibli characters&lt;/p&gt;&lt;p&gt;&amp;nbsp;- 15 most memorable Studio Ghibli movie quotes&lt;/p&gt;&lt;p&gt;&amp;nbsp;- The Art and Animation of Studio Ghibli: A Visual Exploration&lt;/p&gt;&lt;p&gt;We hope youâ€™ll keep reading and liking!!&lt;/p&gt;', 1, 1, '2023-04-26 13:22:10'),
(22, 10, 2, 'Grave of the Fireflies - review', '1682508682_fireflies.jpg', '&lt;p&gt;Grave of the Fireflies is a powerful and devastating film produced by Studio Ghibli and directed by Isao Takahata. The movie tells the story of two siblings, Seita and Setsuko, struggling to survive in Japan during World War II. As they face hunger, illness, and the constant threat of air raids, their relationship is put to the test in the face of unimaginable hardship.&lt;/p&gt;&lt;p&gt;The filmâ€™s haunting score, composed by Michio Mamiya, is as emotionally charged as the story it accompanies. The music is sparse, with long periods of silence and only a few key themes repeated throughout the film. This minimalistic approach perfectly captures the bleakness and despair of the filmâ€™s subject matter, and the music becomes an integral part of the storytelling, conveying the charactersâ€™ pain and suffering in a way that words cannot.&lt;/p&gt;&lt;p&gt;One of the most striking features of the Grave of the Fireflies soundtrack is how it balances moments of beauty and tragedy. The filmâ€™s most memorable piece, \\&quot;Home Sweet Home,\\&quot; is a hauntingly beautiful melody that plays over a scene of the siblings settling into an abandoned shelter. The music underscores the love and resilience that Seita and Setsuko share, even as they face overwhelming adversity.&lt;/p&gt;&lt;p&gt;The filmâ€™s score also features traditional Japanese instruments, such as the koto and shakuhachi, which give the music a timeless quality and help to transport the viewer to a different era. The use of these instruments also adds a layer of authenticity to the film, highlighting the cultural context of the story.&lt;/p&gt;&lt;p&gt;In conclusion, the Grave of the Fireflies soundtrack is a deeply affecting and powerful accompaniment to one of Studio Ghibliâ€™s most devastating films. The music expertly captures the emotions of the characters and the events of the story, conveying both the beauty and tragedy of the siblingsâ€™ journey. While the film is a difficult watch, the music provides a hauntingly beautiful and poignant reminder of the resilience of the human spirit, even in the darkest of times.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;â€œEverything is goneâ€ - Seita&lt;/p&gt;&lt;/blockquote&gt;', 0, 0, '2023-04-26 13:31:22');

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Film Review', '&lt;p&gt;Posts that contains film reviewss&lt;/p&gt;'),
(3, 'News', '&lt;p&gt;Posts that contains news.&lt;/p&gt;'),
(4, 'Soundtracks', '&lt;p&gt;Post about film soundtracks&lt;/p&gt;'),
(5, 'Trailers', '&lt;p&gt;Posts containing teasers or trailers&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `creation_date`) VALUES
(9, 1, 'ThÃ©o', 'theo.gouin@utbm.fr', '$2y$10$fNprVe/edl0/HHsjWoCJWuLFBJ14m6PJXHKlCUxFeFh7atz16pJmW', '2023-04-20 16:05:50'),
(10, 1, 'Cece', 'celianeallaire@gmail.com', '$2y$10$2DVzMyEjGTLGfckwKwlPoukvXQtXPt1RvSK1zcWf42XqrbY3ZgEWm', '2023-04-25 13:43:19'),
(11, 1, 'Sofia', 'sofiafree@gmail.com', '$2y$10$gNLLhYfq/GhdpJEvNLGOsuFJ8eOsG3VUQ9hvbAx6.UMVKl2vxIEOa', '2023-04-26 06:02:50'),
(12, 0, 'Mary', 'maryanne@gmail.com', '$2y$10$Cgjho3uDh1yFCcd0XEIFDeG5YUaJqd5l.xtoeG4dfUJDF0Y4uqubu', '2023-04-26 11:11:19'),
(13, 0, 'Marco', 'marcojacobo@ghibli.com', '$2y$10$jCqKe0TmXrJAdJeC7gamVODF85F4DzPpuSSuT7kmLFOnWn6bpbmQy', '2023-04-26 11:12:06');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Index pour la table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
