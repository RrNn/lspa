import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import LoadersAnimations from './components/LoadersAnimations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';

export default {
  mode: 'history',
  linkActiveClass: 'font-bold underline',
  routes: [
    {
      path: '*',
      component: NotFound,
    },
    {
      path: '/',
      component: Logo,
    },
    {
      path: '/logo-symbol',
      component: LogoSymbol,
    },
    {
      path: '/colors',
      component: Colors,
    },
    {
      path: '/typography',
      component: Typography,
    },
    {
      path: '/mascot',
      component: Mascot,
    },
    {
      path: '/illustrations',
      component: Illustrations,
    },
    {
      path: '/loaders-and-animations',
      component: LoadersAnimations,
    },
    {
      path: '/wallpapers',
      component: Wallpapers,
    },
  ],
};
