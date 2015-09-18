
require 'open-uri'
require 'mini_magick'

puts "Création d'un nouveau projet"
puts "Quel est le titre du projet ?"
title = gets.chomp
puts

puts "Quel est le slug du projet ? (pas d'espace ou de caractères spéciaux)"
slug = gets.chomp
puts

puts "Quel est l'URL du projet ?"
link = gets.chomp
puts

puts "Quelle est l'URL de l'image ?"
image_url = gets.chomp
puts 

puts "Downloading image..."
image = MiniMagick::Image.open(image_url)

puts "Resizing..."
image.resize "1200x675"

image_path = "content/#{slug}.#{image.type}"

puts "Saving..."
image.write image_path
puts "Saved in #{image_path}"


puts "Creating project"

date = Time.now.strftime("%Y-%m-%d")
project_path = "_posts/#{date}-#{slug}.md"

puts project_path

project = File.new(project_path, "w")
project.puts("---
layout: post
title:  \"#{title}\"
order: 0
image:
    url: \"#{image_path}\"
    alt: \"#{title}\"
link: \"#{link}\"
---

")
project.close

puts "Created project at #{project_path}"



# http://baronmag.com/wp-content/uploads/2015/09/UrbaniaCA005-43-of-104.jpg