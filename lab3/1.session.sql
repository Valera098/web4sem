select workers.id, workers.building, addresses.floors, workers.workers
from workers INNER join addresses
on addresses.address = workers.building
where workers.workers > 5;