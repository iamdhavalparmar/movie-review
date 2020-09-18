class ApplicationRecord < ActiveRecord::Base
   	has_attached_file :image
  	self.abstract_class = true
end
